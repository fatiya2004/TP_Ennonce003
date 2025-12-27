# TP_Ennonce003
TP 3 consiste à créer un formulaire de produit avec Symfony. Pour commencer, Bootstrap 5 est importé dans le fichier base.html.twig afin d’améliorer le style et l’apparence de la page.

Ensuite, un contrôleur est créé à l’aide de la commande php bin/console make:controller ProductController. Ce contrôleur permet d’afficher la page du produit et de gérer le formulaire.

Après cela, un formulaire est généré avec la commande php bin/console make:form ProductOrderType. Cette classe permet de définir la structure du formulaire.

Dans le Form Type, les champs nécessaires sont ajoutés : la quantité avec des valeurs minimum et maximum, la couleur sous forme de liste de choix, ainsi qu’un bouton d’envoi. Des attributs sont ajoutés pour appliquer le style Bootstrap.

Dans le contrôleur, la méthode handleRequest() est utilisée pour traiter les données du formulaire. Une vérification est faite pour savoir si le formulaire est soumis et valide, puis les données sont traitées ou un message est affiché.

Enfin, dans le template Twig, le formulaire HTML statique est remplacé par les fonctions Symfony comme form_start, form_widget et form_end, tout en conservant la mise en forme Bootstrap.
