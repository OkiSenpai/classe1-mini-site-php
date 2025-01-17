<?php
$cours = [
    "langague" => [
        "javascript" => [
            "name" => "JavaScript",
            "description" => "JavaScript est un langage polyvalent utilisé pour créer des pages web interactives. Il prend en charge la programmation orientée objet, fonctionnelle et impérative.",
            "topics" => [
                "variable" => [
                    "title" => "Les variables",
                    "description" => "Les variables permettent de stocker des valeurs réutilisables. En JavaScript, on utilise 'var', 'let', ou 'const' selon le contexte et les besoins de portée.",
                    "examples" => [
                       "exemple1" => [
                            "code" => "let x = 5;\nconsole.log(x);",
                            "output" => "output 5"
                        ],
                     "exemple2" => [
                            "code" => "const y = 10;\nconsole.log(y);",
                            "output" => "10"
                        ]
                    ]
                ],
                "operateurs" => [
                    "title" => "Les opérateurs",
                    "description" => "Les opérateurs sont utilisés pour manipuler les valeurs. Les opérateurs arithmétiques (+, -, *, /) sont parmi les plus courants.",
                    "examples" => [
                       "exemple1" => [
                            "code" => "let somme = 10 + 20;\nconsole.log(somme);",
                            "output" => "30"
                        ],
                      "exemple2"=>  [
                            "code" => "let produit = 5 * 4;\nconsole.log(produit);",
                            "output" => "20"
                        ]
                    ]
                ],
                "conditions" => [
                    "title" => " Les conditions",
                    "description" => "Les instructions conditionnelles permettent d'exécuter du code en fonction de certaines conditions.",
                    "examples" => [
                     "exemple1" =>   [
                            "code" => "if (10 > 5) { console.log('Vrai'); } else { console.log('Faux'); }",
                            "output" => "Vrai"
                     ],
                        "exemple2" => [
                            "code" => "if (10 < 5) { console.log('Vrai'); } else { console.log('Faux'); }",
                            "output" => "Faux"
                        ],
                        "exemple3" => [
                            "code" => "let age = 20;\nif (age >= 18) { console.log('Majeur'); } else { console.log('Mineur'); }",
                            "output" => "Majeur"
                        ],
                        "exemple4" => [
                            "code" => "let heure = 14;\nif (heure < 12) { console.log('Matin'); } else if (heure < 18) { console.log('Après-midi'); } else { console.log('Soir'); }",
                            "output" => "Après-midi"
                        ]
                  

                    ]
                ],
                "boucles" => [
                    "title" => "Les boucles",
                    "description" => "Les boucles permettent de répéter un bloc de code tant qu'une condition est vraie.",
                    "examples" => [
                     "exemple1" =>   [
                            "code" => "for (let i = 0; i < 3; i++) { console.log(i); }",
                            "output" => "0\n1\n2"
                     ],
                        "exemple2" => [
                            "code" => "let i = 0;\nwhile (i < 3) { console.log(i); i++; }",
                            "output" => "0\n1\n2"
                        ]
                    ]
                ]
            ]
        ],
        "python" => [
            "name" => "Python",
            "description" => "Python est connu pour sa simplicité et sa lisibilité, souvent utilisé pour l'analyse de données, l'intelligence artificielle et le développement web.",
            "topics" => [
                "variable" => [
                    "title" => "Variables",
                    "description" => "Les variables sont des conteneurs pour stocker des valeurs. En Python, il n'est pas nécessaire de déclarer un type.",
                    "examples" => [
                    "exemple1" =>    [
                            "code" => "x = 5\nprint(x)",
                            "output" => "5"
                        ],
                     "exemple2"  => [
                            "code" => "nom = 'Jean'\nprint(nom)",
                            "output" => "Jean"
                        ]
                    ]
                ],
                "operateurs" => [
                    "title" => "Opérateurs",
                    "description" => "Les opérateurs permettent d'effectuer des calculs et des comparaisons.",
                    "examples" => [
                     "exemple1" =>   [
                            "code" => "somme = 3 + 2\nprint(somme)",
                            "output" => "5"
                     ],
                        "exemple2" => [
                            "code" => "produit = 3 * 2\nprint(produit)",
                            "output" => "6"
                        ]
                    ]
                ],
                "conditions" => [
                    "title" => "Conditions",
                    "description" => "Les instructions 'if', 'elif', et 'else' contrôlent le flux d'exécution.",
                    "examples" => [
                     "exemple1"=>   [
                            "code" => "if 5 > 3:\n  print('Vrai')",
                            "output" => "Vrai"
                     ],
                        "exemple2" => [
                            "code" => "if 5 < 3:\n  print('Vrai')\nelse:\n  print('Faux')",
                            "output" => "Faux"
                        ]
                    ]
                ]
            ]
        ],
        "sql" => [
            "name" => "SQL",
            "description" => "SQL est un langage standardisé utilisé pour gérer les bases de données relationnelles.",
            "topics" => [
                "select" => [
                    "title" => "Instructions SELECT",
                    "description" => "SELECT extrait des données d'une table.",
                    "examples" => [
                     "exemple1"=>   [
                            "code" => "SELECT * FROM utilisateurs;",
                            "output" => "Affiche toutes les colonnes de la table 'utilisateurs'."
                     ],
                        "exemple2" => [
                            "code" => "SELECT nom, prenom FROM utilisateurs WHERE age > 18;",
                            "output" => "Affiche les noms et prénoms des utilisateurs de plus de 18 ans."
                        ]
                    ]
                ]
            ]
        ],
        "php" => [
            "name" => "PHP",
            "description" => "PHP est un langage de script principalement utilisé pour le développement web dynamique.",
            "topics" => [
                "variable" => [
                    "title" => "Variables",
                    "description" => "Les variables en PHP sont précédées du symbole '$'.",
                    "examples" => [
                    "exemple1" =>    [
                            "code" => "\$x = 10;\necho \$x;",
                            "output" => "10"
                    ],
                        "exemple2" => [
                            "code" => "\$nom = 'Jean';\necho \$nom;",
                            "output" => "Jean"
                        ]
                    ]
                ]
            ]
        ]
    ]
];
$decription = [
  "titre" => "Bienvenue",
  "description" => "Bienvenue sur notre mini site en php où vous pouvez voir tous ce qu'on a fait en cours de programmation just'à maintentant, cliquer sur le cours qui vous interes pour voir le contenu de chaque cours. n'hesitez pas de ajouter des truc et de metre à jour le site"
];