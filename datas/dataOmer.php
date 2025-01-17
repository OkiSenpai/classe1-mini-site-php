<?php
$cours = [
  "langague" => [
    
      "name" => "JavaScript",
      "description" => "JavaScript est un langage polyvalent utilisé pour créer des pages web interactives. Il prend en charge la programmation orientée objet, fonctionnelle et impérative.",
      "topics" => [
       "variable" => [
          "title" => "Variables",
          "description" => "Les variables permettent de stocker des valeurs réutilisables. En JavaScript, on utilise 'var', 'let', ou 'const' selon le contexte et les besoins de portée.",
          "examples" => [
            [
              "code" => "let x = 5;\nconsole.log(x);",
              "output" => "5"
            ],
            [
              "code" => "const y = 10;\nconsole.log(y);",
              "output" => "10"
            ]
          ]
        ],
        [
          "title" => "Opérateurs",
          "description" => "Les opérateurs sont utilisés pour manipuler les valeurs. Les opérateurs arithmétiques (+, -, *, /) sont parmi les plus courants.",
          "examples" => [
            [
              "code" => "let somme = 10 + 20;\nconsole.log(somme);",
              "output" => "30"
            ],
            [
              "code" => "let produit = 5 * 4;\nconsole.log(produit);",
              "output" => "20"
            ]
          ]
        ],
        [
          "title" => "Conditions",
          "description" => "Les instructions conditionnelles permettent d'exécuter du code en fonction de certaines conditions.",
          "examples" => [
            [
              "code" => "if (10 > 5) { console.log('Vrai'); } else { console.log('Faux'); }",
              "output" => "Vrai"
            ]
          ]
        ],
        [
          "title" => "Boucles",
          "description" => "Les boucles permettent de répéter un bloc de code tant qu'une condition est vraie.",
          "examples" => [
            [
              "code" => "for (let i = 0; i < 3; i++) { console.log(i); }",
              "output" => "0\n1\n2"
            ]
          ]
        ]
      ]
    ],
    [
      "name" => "Python",
      "description" => "Python est connu pour sa simplicité et sa lisibilité, souvent utilisé pour l'analyse de données, l'intelligence artificielle et le développement web.",
      "topics" => [
        [
          "title" => "Variables",
          "description" => "Les variables sont des conteneurs pour stocker des valeurs. En Python, il n'est pas nécessaire de déclarer un type.",
          "examples" => [
            [
              "code" => "x = 5\nprint(x)",
              "output" => "5"
            ],
            [
              "code" => "nom = 'Jean'\nprint(nom)",
              "output" => "Jean"
            ]
          ]
        ],
        [
          "title" => "Opérateurs",
          "description" => "Les opérateurs permettent d'effectuer des calculs et des comparaisons.",
          "examples" => [
            [
              "code" => "somme = 3 + 2\nprint(somme)",
              "output" => "5"
            ]
          ]
        ],
        [
          "title" => "Conditions",
          "description" => "Les instructions 'if', 'elif', et 'else' contrôlent le flux d'exécution.",
          "examples" => [
            [
              "code" => "if 5 > 3:\n  print('Vrai')",
              "output" => "Vrai"
            ]
          ]
        ]
      ]
    ],
    [
      "name" => "SQL",
      "description" => "SQL est un langage standardisé utilisé pour gérer les bases de données relationnelles.",
      "topics" => [
        [
          "title" => "Instructions SELECT",
          "description" => "SELECT extrait des données d'une table.",
          "examples" => [
            [
              "code" => "SELECT * FROM utilisateurs;",
              "output" => "Affiche toutes les colonnes de la table 'utilisateurs'."
            ]
          ]
        ]
      ]
    ],
    [
      "name" => "PHP",
      "description" => "PHP est un langage de script principalement utilisé pour le développement web dynamique.",
      "topics" => [
        [
          "title" => "Variables",
          "description" => "Les variables en PHP sont précédées du symbole '$'.",
          "examples" => [
            [
              "code" => "\$x = 10;\necho \$x;",
              "output" => "10"
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