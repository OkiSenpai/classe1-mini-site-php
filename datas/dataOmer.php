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
                            "code" => "let x = 5; // declaring a variable \nconsole.log(x) //printing valeu of x into console ;",
                            "output" => "output 5"
                        ],
                        "exemple2" => [
                            "code" => "const y = 10;\nconsole.log(y);",
                            "output" => "output 10"
                        ]
                    ]
                ],
                "operateurs" => [
                    "title" => "Les opérateurs",
                    "description" => "Les opérateurs sont utilisés pour manipuler les valeurs. Les opérateurs arithmétiques (+, -, *, /) sont parmi les plus courants.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "let somme = 10 + 20;\nconsole.log(somme);",
                            "output" => " 30"
                        ],
                        "exemple2" => [
                            "code" => "let produit = 5 * 4;\nconsole.log(produit);",
                            "output" => "output 20"
                        ]
                    ]
                ],
                "conditions" => [
                    "title" => " Les conditions",
                    "description" => "Les instructions conditionnelles permettent d'exécuter du code en fonction de certaines conditions.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "if (10 > 5) { console.log('Vrai'); } else { console.log('Faux'); }",
                            "output" => "output Vrai"
                        ],
                        "exemple2" => [
                            "code" => "if (10 < 5) { console.log('Vrai'); } else { console.log('Faux'); }",
                            "output" => "output Faux"
                        ],
                        "exemple3" => [
                            "code" => "let age = 20;\nif (age >= 18) { console.log('Majeur'); } else { console.log('Mineur'); }",
                            "output" => "output Majeur"
                        ],
                        "exemple4" => [
                            "code" => "let heure = 14;\nif (heure < 12) { console.log('Matin'); } else if (heure < 18) { console.log('Après-midi'); } else { console.log('Soir'); }",
                            "output" => "output Après-midi"
                        ]


                    ]
                ],
                "boucles" => [
                    "title" => "Les boucles",
                    "description" => "Les boucles permettent de répéter un bloc de code tant qu'une condition est vraie.",
                    "examples" => [
                        "exemple1" => [

                            "code" => "for (let i = 0; i < 3; i++) { console.log(i); }",
                            "output" => "output 0\n1\n2"
                        ],
                        "exemple2" => [
                            "code" => "let i = 0;\nwhile (i < 3) { console.log(i); i++; }",
                            "output" => "0\n1\n2"
                        ]
                    ],

                    "while" => [
                        "title" => "La boucle while",
                        "description" => "La boucle while répète un bloc de code tant qu'une condition est vraie.",
                        "examples" => [
                            "exemple1" => [
                                "code" => "let i = 0;\nwhile (i < 3) { console.log(i); i++; }",
                                "output" => "output 0\n1\n2"
                            ],
                            "exemple2" => [
                                "code" => "let i = 0;\ndo { console.log(i); i++; } while (i < 3);",
                                "output" => "output 0\n1\n2"
                            ],
                        ],
                    ],
                ],

            ],
        ],

        "python" => [
            "header" => [
                "name" => "Python",
                "description" => "Python est un langage de programmation interprété, interactif et orienté objet. Il est connu pour sa syntaxe claire et lisible, ce qui en fait un excellent choix pour les débutants, tout en étant puissant pour les développeurs expérimentés. Voici quelques points clés sur Python et ses utilisations :",
            ],
            "descriptions" => [
                [
                    "title" => "Python Overview",
                    "description" => "Python est un langage de programmation interprété, interactif et orienté objet. Il est connu pour sa syntaxe claire et lisible, ce qui en fait un excellent choix pour les débutants, tout en étant puissant pour les développeurs expérimentés. Voici quelques points clés sur Python et ses utilisations :"
                ],
                [
                    "title" => "Développement Web",
                    "description" => "Python est largement utilisé pour le développement web grâce à des frameworks comme Django et Flask. Ces frameworks facilitent la création de sites web robustes et évolutifs."
                ],
                [
                    "title" => "Science des Données",
                    "description" => "Python est très populaire dans le domaine de la science des données. Des bibliothèques comme NumPy, pandas, et Matplotlib permettent de manipuler et de visualiser des données facilement."
                ],
                [
                    "title" => "Intelligence Artificielle",
                    "description" => "Python est également utilisé dans le développement de l'intelligence artificielle et de l'apprentissage automatique grâce à des bibliothèques comme TensorFlow, Keras, et scikit-learn."
                ],
                [
                    "title" => "Automatisation",
                    "description" => "Python est souvent utilisé pour automatiser des tâches répétitives, telles que le traitement de fichiers, l'extraction de données web, et la gestion de systèmes."
                ],
                [
                    "title" => "Portabilité",
                    "description" => "Python est compatible avec la plupart des systèmes d'exploitation (Windows, Linux, macOS), ce qui le rend très portable et flexible pour le développement d'applications."
                ]
            ],
            "topics" => [
                "variable" => [
                    "title" => "Les variables",
                    "description" => "Les variables en Python sont créées en utilisant le symbole '='.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "x = 10\nprint(x)",
                            "output" => "output 10"
                        ],
                        "exemple2" => [
                            "code" => "nom = 'Jean'\nprint(nom)",
                            "output" => "output Jean"
                        ]
                    ]
                ],
                "declaration" => [
                    "title" => "Déclaration des Variables",
                    "description" => "En Python, une variable est déclarée en utilisant le symbole '=' suivi du nom de la variable.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "nom_variable = 'valeur'\nprint(nom_variable)",
                            "output" => "output valeur"
                        ]
                    ]
                ],
                "types" => [
                    "title" => "Types de Données",
                    "description" => "Python est un langage faiblement typé, ce qui signifie que vous n'avez pas besoin de déclarer le type de données d'une variable. Les types de données courants incluent : chaînes de caractères (str), entiers (int), flottants (float), booléens (bool), listes (list), tuples (tuple), dictionnaires (dict), et None.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "chaine = 'Bonjour'\nentier = 10\nflottant = 10.5\nbooleen = True\nprint(chaine, entier, flottant, booleen)",
                            "output" => "output Bonjour 10 10.5 True"
                        ]
                    ]
                ],
                "naming" => [
                    "title" => "Règles de Nommage",
                    "description" => "Les noms de variables doivent commencer par une lettre ou un underscore (_), suivi de lettres, chiffres ou underscores. Les noms de variables sont sensibles à la casse, ce qui signifie que variable et Variable sont deux variables différentes.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "Variable = 'valeur1'\nvariable = 'valeur2'\nprint(Variable)\nprint(variable)",
                            "output" => "output valeur1\nvaleur2"
                        ]
                    ]
                ],
                "scope" => [
                    "title" => "Portée des Variables",
                    "description" => "La portée d'une variable détermine où elle peut être utilisée dans le script. Les variables peuvent avoir une portée locale (déclarée à l'intérieur d'une fonction) ou globale (déclarée en dehors de toute fonction).",
                    "examples" => [
                        "exemple1" => [
                            "code" => "def test():\n  local = 'local'\n  print(local)\n\ntest()\nprint(local)",
                            "output" => "output local\nNameError: name 'local' is not defined"
                        ]
                    ]
                ],
                "operations" => [
                    "title" => "Opérations sur les Variables",
                    "description" => "Vous pouvez effectuer diverses opérations sur les variables, comme la concaténation de chaînes, les opérations arithmétiques, et bien plus encore.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "a = 5\nb = 10\nsomme = a + b\nprint(somme)",
                            "output" => "output 15"
                        ],
                        "exemple2" => [
                            "code" => "chaine1 = 'Bonjour'\nchaine2 = ' le monde'\nresultat = chaine1 + chaine2\nprint(resultat)",
                            "output" => "output Bonjour le monde"
                        ]
                    ]
                ]
            ]
        ],
        "php" => [
            "name" => "PHP",
            "description" => [
                [
                    "title" => "PHP Overview",
                    "description" => "PHP (Hypertext Preprocessor) est un langage de script côté serveur conçu principalement pour le développement web, mais il est également utilisé comme langage de programmation généraliste. PHP est intégré dans le code HTML et est exécuté sur le serveur, ce qui permet de générer dynamiquement des pages web. Voici quelques points clés sur PHP et ses utilisations :"
                ],
                [
                    "title" => "Développement Web Dynamique",
                    "description" => "PHP est largement utilisé pour créer des sites web dynamiques et interactifs. Il permet de gérer des formulaires, de traiter des données de soumission, de gérer des sessions et des cookies, et d'interagir avec des bases de données."
                ],
                [
                    "title" => "Intégration avec HTML",
                    "description" => "PHP s'intègre facilement avec HTML, ce qui permet aux développeurs d'incorporer du code PHP directement dans les fichiers HTML. Cela facilite la création de pages web dynamiques sans avoir besoin de fichiers séparés pour le code serveur."
                ],
                [
                    "title" => "Support des Bases de Données",
                    "description" => "PHP prend en charge une large gamme de bases de données, y compris MySQL, PostgreSQL, SQLite, et bien d'autres. Il offre des fonctions intégrées pour se connecter aux bases de données, exécuter des requêtes SQL, et gérer les résultats."
                ],
                [
                    "title" => "Frameworks et CMS",
                    "description" => "Il existe de nombreux frameworks PHP populaires, tels que Laravel, Symfony, et CodeIgniter, qui facilitent le développement rapide et structuré d'applications web. De plus, des systèmes de gestion de contenu (CMS) comme WordPress, Joomla, et Drupal sont construits en PHP."
                ],
                [
                    "title" => "Communauté et Ressources",
                    "description" => "PHP bénéficie d'une grande communauté de développeurs et d'une abondance de ressources en ligne, y compris des tutoriels, des forums, et des bibliothèques de code. Cela facilite l'apprentissage et le développement avec PHP."
                ],
                [
                    "title" => "Sécurité",
                    "description" => "Bien que PHP offre de nombreuses fonctionnalités pour sécuriser les applications web, telles que la gestion des sessions et la validation des entrées, il est essentiel de suivre les meilleures pratiques de sécurité pour éviter les vulnérabilités courantes comme les injections SQL et les attaques XSS."
                ],
                [
                    "title" => "Portabilité",
                    "description" => "PHP est compatible avec la plupart des serveurs web (Apache, Nginx, IIS) et des systèmes d'exploitation (Windows, Linux, macOS), ce qui le rend très portable et flexible pour le déploiement d'applications web."
                ]
            ],
            "topics" => [
                "variable" => [
                    "title" => "Les variables",
                    "description" => "Les variables en PHP sont précédées du symbole '$'.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "\$x = 10;\necho \$x;",
                            "output" => "output 10"
                        ],
                        "exemple2" => [
                            "code" => "\$nom = 'Jean';\necho \$nom;",
                            "output" => "output Jean"
                        ]
                    ]
                ],
                "declaration" => [
                    "title" => "Déclaration des Variables",
                    "description" => "En PHP, une variable est déclarée en utilisant le symbole \$ suivi du nom de la variable.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "\$nomVariable = \"valeur\";",
                            "output" => "output valeur"
                        ]
                    ]
                ],
                "types" => [
                    "title" => "Types de Données",
                    "description" => "PHP est un langage faiblement typé, ce qui signifie que vous n'avez pas besoin de déclarer le type de données d'une variable. Les types de données courants incluent : chaînes de caractères (string), entiers (integer), flottants (float), booléens (boolean), tableaux (array), objets (object), et null.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "\$chaine = \"Bonjour\";\n\$entier = 10;\n\$flottant = 10.5;\n\$booleen = true;",
                            "output" => "output Bonjour, 10, 10.5, 1"
                        ]
                    ]
                ],
                "naming" => [
                    "title" => "Règles de Nommage",
                    "description" => "Les noms de variables doivent commencer par une lettre ou un underscore (_), suivi de lettres, chiffres ou underscores. Les noms de variables sont sensibles à la casse, ce qui signifie que \$Variable et \$variable sont deux variables différentes.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "\$Variable = \"valeur1\";\n\$variable = \"valeur2\";\necho \$Variable;\necho \$variable;",
                            "output" => "output valeur1valeur2"
                        ]
                    ]
                ],
                "scope" => [
                    "title" => "Portée des Variables",
                    "description" => "La portée d'une variable détermine où elle peut être utilisée dans le script. Les variables peuvent avoir une portée locale (déclarée à l'intérieur d'une fonction), globale (déclarée en dehors de toute fonction), ou statique (conserve sa valeur entre les appels de fonction).",
                    "examples" => [
                        "exemple1" => [
                            "code" => "function test() {\n  \$local = \"local\";\n  echo \$local;\n}\n\ntest();\n\necho \$local;",
                            "output" => "output local\nNotice: Undefined variable: local"
                        ]
                    ]
                ],
                "superglobals" => [
                    "title" => "Variables Superglobales",
                    "description" => "PHP fournit plusieurs variables superglobales qui sont accessibles partout dans le script, telles que \$_GET, \$_POST, \$_SESSION, \$_COOKIE, etc.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "\$_GET['nom'] = \"Jean\";\necho \$_GET['nom'];",
                            "output" => "output Jean"
                        ]
                    ]
                ],
                "operations" => [
                    "title" => "Opérations sur les Variables",
                    "description" => "Vous pouvez effectuer diverses opérations sur les variables, comme la concaténation de chaînes, les opérations arithmétiques, et bien plus encore.",
                    "examples" => [
                        "exemple1" => [
                            "code" => "\$a = 5;\n\$b = 10;\n\$somme = \$a + \$b;\necho \$somme;",
                            "output" => "output 15"
                        ],
                        "exemple2" => [
                            "code" => "\$chaine1 = \"Bonjour\";\n\$chaine2 = \" le monde\";\n\$resultat = \$chaine1 . \$chaine2;\necho \$resultat;",
                            "output" => "output Bonjour le monde"
                        ]
                    ]
                ]
            ]
        ],
    ]
];
$decription = [
    "titre" => "Bienvenue",
    "description" => "Bienvenue sur notre mini site en php où vous pouvez voir tous ce qu'on a fait en cours de programmation just'à maintentant, cliquer sur le cours qui vous interes pour voir le contenu de chaque cours. n'hesitez pas de ajouter des truc et de metre à jour le site"
];