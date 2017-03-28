import { Meteor } from 'meteor/meteor';
import { Mongo } from 'meteor/mongo';
import { check } from 'meteor/check';

export const Projects = new Mongo.Collection('projects');

if (Meteor.isServer) {
  Meteor.publish('projects', function projectsPublication() {
    return Projects.find();
  });
}

Meteor.methods({
 'projects.insert'(name, description) {
   check(name, String);
   check(description, String);

   // Make sure the user is logged in before inserting a task
  //  if (! Meteor.userId()) {
  //    throw new Meteor.Error('not-authorized');
  //  }

   Projects.insert({
     name:name,
     about:description,
     createdAt: new Date(),
    //  owner: Meteor.userId(),
    //  username: Meteor.user().username,
   });
 },
 'projects.remove'(projectId) {
   check(projectId, String);

   Projects.remove(projectId);
 },
});
