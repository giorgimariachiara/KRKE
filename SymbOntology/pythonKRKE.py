import rdflib
from rdflib import Graph 

Symbontology = Graph()
Symbontology.parse("/Users/ahi.maria/Documents/GitHub/KRKE/SymbOntology/symbo.ttl", format="ttl")

print(Symbontology)
