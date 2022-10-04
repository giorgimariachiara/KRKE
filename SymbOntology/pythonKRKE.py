import rdflib
from rdflib import Graph 

Symbontology = Graph()
Symbontology = Symbontology.parse("Symbontology.ttl", format="ttl")
