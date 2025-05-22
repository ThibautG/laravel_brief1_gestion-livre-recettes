<p align="center">
    <img src="https://img.shields.io/badge/Made%20with-Laravel-red.svg" alt="Made with Laravel">
    <img src="https://img.shields.io/badge/Type-CRUD%20App-blue.svg" alt="CRUD App">
    <img src="https://img.shields.io/badge/Usage-Educational%20Project-orange" alt="Usage">
    <img src="https://img.shields.io/badge/Status-Project%20Completed-brightgreen" alt="Project Status">
</p>

# 📘 Laravel - Gestion d’un Livre de Recettes

Ce projet a été réalisé dans le cadre du **Brief 1 Laravel** :
> "Créer une application web permettant à un utilisateur de lister, ajouter, modifier et supprimer des recettes."

---

## 🔧 Fonctionnalités

L'application permet à l'utilisateur de :

- 📄 **Lister** toutes les recettes existantes (`READ`)
- ➕ **Ajouter** une nouvelle recette avec un titre et une description (`CREATE`)
- ✏️ **Modifier** une recette existante (`UPDATE`)
- ❌ **Supprimer** une recette (`DELETE`)

L'ensemble du cycle **CRUD** a été mis en œuvre avec :
- Contrôleurs Laravel
- Blade pour les vues
- Eloquent ORM
- Base de données SQLite

---

## 🧭 Parcours utilisateur

Les captures d'écran présentées dans ce document suivent le **chemin fonctionnel principal** de l'application :

1. **Création d'une recette** via un formulaire simple
2. **Affichage de la liste des recettes**
3. **Édition d'une recette** sélectionnée
4. **Affichage post-modification**
5. **Suppression d'une recette** et affichage mis à jour

---

## ⚙️ Technologies utilisées

- **Laravel 12**
- **Blade** (moteur de templates)
- **SQLite** pour la base de données
- **PHP 8.2+** (compatibilité du projet)
- **Bootstrap** (via CDN ou installation locale) ou Tailwind CSS

---

## 📂 Structure du projet

- `/routes/web.php` → Déclaration des routes CRUD
- `/app/Http/Controllers/RecipeController.php` → Contrôleur principal
- `/app/Models/Recipe.php` → Modèle Eloquent de la recette
- `/resources/views/recipes/` → Vues Blade (index, create, edit, etc.)
- `/database/database.sqlite` → Base de données SQLite
- `/database/migrations/` → Fichiers de migration pour la table `recipes`

---

## ▶️ Lancer le projet

1. Cloner le dépôt :
```bash
git clone https://github.com/ThibautG/laravel_brief1_gestion-livre-recettes.git
cd laravel_brief1_gestion-livre-recettes
```

2. Installer les dépendances :
```bash
composer install
npm install && npm run dev
```

3. Configurer `.env` :
```env
DB_CONNECTION=sqlite
DB_DATABASE=/chemin/absolu/vers/database/database.sqlite
```

4. Créer la base :
```bash
touch database/database.sqlite
php artisan migrate
```

5. Lancer le serveur :
```bash
php artisan serve
```

---

## ✅ Résultat attendu

L'application propose une interface simple et fonctionnelle pour gérer des recettes de cuisine.  
Le CRUD est complet, les routes et vues sont cohérentes, et les données sont bien enregistrées dans la base SQLite.
