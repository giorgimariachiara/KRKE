import rdflib
from rdflib import Graph 

Symbontology = Graph()
Symbontology.parse("/Users/ahi.maria/Documents/GitHub/KRKE/SymbOntology/symbo.ttl", format="ttl")

print(Symbontology)

CompetencyQuestion1 = '''PREFIX symbo:<https://github.com/giorgimariachiara/KRKE/blob/main/SymbOntology/SymbOntology.owl#> \
SELECT ?Author \
WHERE { symbo:Voyelles symbo:hasAuthor ?Author}
'''

results = Symbontology.query(CompetencyQuestion1)
for result in results:
    print(result)
