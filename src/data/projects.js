import generatorImage from "../images/generator.png"
import agImage from "../images/alumi-guard.png"
import afsImage from "../images/aluminumfencesupply.png"
import pricingImage from "../images/pricing.png"
import bopImage from "../images/binofparts.png"

export default {
  projects: [
    {
      name: "FenceGenerator",
      description:
        "A pure JavaScript page that dynamically generates SVG elements to create technical drawings of Alumi-Guard fence products.",
      technologies: ["Javascript", "HTML", "CSS", "SVG", "Cross-Browser"],
      image: generatorImage,
      url: "http://alumi-guard.com/fence-generator",
    },
    {
      name: "Alumi-Guard",
      description:
        "Public website for the Alumi-Guard brands fence products. A ReactJS app with a custom built GraphQL server and a MongoDB database all managed using docker containers.",
      technologies: ["reactjs", "graphql", "docker", "node", "mongodb"],
      image: agImage,
      url: "http://alumi-guard.com/",
    },
    {
      name: "Aluminum Fence Supply",
      description:
        "Public website for Aluminum Fence Supply fence products. A ReactJS app with a custom built GraphQL server and a MongoDB database all managed using docker containers.",
      technologies: ["reactjs", "graphql", "docker", "node", "mongodb"],
      image: afsImage,
      url: "http://aluminumfencesupply.com/",
    },
    {
      name: "Barrette Pricing",
      description:
        "An internal tool to search for product pricing based on specific stores or regions. A ReactJS app with a GraphQL api built using PrismaGraphQL and a MongoDB database. Pricing data is managed using Microsoft Excel files that are uploaded automatically when they are saved.",
      technologies: ["reactjs", "graphql", "docker", "prismagraphql", "excel"],
      image: pricingImage,
    },
    {
      name: "Bin of Parts",
      description:
        "A non profit I founded to help FIRST Robotics teams to share parts with each other and allow events to inventory spare parts. Custom built Ruby on Rails app with a REST api that serves as a backend for a full iOS app, that has a complete parts database built in.",
      technologies: ["Ruby", "Ruby on Rails", "REST", "iOS"],
      image: bopImage,
      url: "http://www.binofparts.com",
    },
  ],
}
