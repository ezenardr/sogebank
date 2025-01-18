<p align="center"><img src="public/logo-full.png" alt="Sogebank Logo" /></p>
<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# SOGEBANK
___

L’application web de la SOGEBANK sera une plateforme bancaire moderne, sécurisée et responsive, conçue pour offrir une expérience utilisateur optimale et un accès fluide aux services bancaires. Cette plateforme s’adressera aux clients particuliers et aux entreprises, en proposant des fonctionnalités telles que:

- 📄 Gestion des comptes
- 💸 Transferts de fonds
- 🧾 Paiement de factures
- 📊 Historique des transactions
- 📝 Demande de prêt en ligne
- 🛡️ Sécurité renforcée
- 📱 Interface responsive
- 💬 Support client intégré
- 🔔 Notifications en temps réel

Cette application permettra à la SOGEBANK de proposer des services bancaires innovants, accessibles et sécurisés à ses clients.

## 🛠️ Technologies utilisées

- **Backend :** PHP 8+, Laravel 11
- **Frontend :** Blade Templates, Tailwind CSS
- **Gestionnaire de dépendances :** Composer
- **Base de données :** MySQL

___

## ⚙️ Installation

### Prérequis
- Php (Xampp de préférable)
- MYSQL
- Composer
- Nodejs, npm
- git/github

1. **Cloner le dépôt :**
```bash
   git clone https://github.com/ezenardr/sogebank.git
   cd sogebank
```
2. **Installer les dépendances : :**
```bash
composer install
npm install
```
Dans un nouveau terminal, lancez :
```bash
php artisan serve
```
3. **Configurer les variables d'environnement :**
```bash 
cp .env.example .env
php artisan key:generate
```
4. **Configurer la base de données dans le fichier `.env`**
```bash
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=sogebank
DB_USERNAME=root
DB_PASSWORD=
```
5. **Lancer les migrations de la base de données :**
```bash
php artisan migrate
```
6. **Démarrer le serveur de développement :**
```bash
    php artisan serve
```
Dans un nouveau terminal, lancez :
```bash
php artisan serve
```

## 🤝 Comment contribuer
Nous accueillons avec plaisir les contributions pour améliorer cette application. Suivez les étapes ci-dessous pour contribuer au projet :

1. **Clonez Le repo**

   ```bash
   git clone https://github.com/ezenardr/sogebank.git
   cd sogebank-web-app
   ```
2. **Créez une branche pour votre fonctionnalité ou correction de bug**

[Guide de Nommage des Branches et des Commits](#-guide-de-nommage-des-branches-et-des-commits)
```bash
    git branch nom-de-votre branche
    git switch nom-de-votre-branche
```
3. **Implémentez vos modifications**

- Suivez les conventions de code existantes.
- Assurez-vous que votre code est lisible et bien structuré.
- Testez vos modifications avant de les valider.

4. **Validez vos modifications**
```bash
git add .
git commit -m "✨ Ajout : description de votre modification"
```
5. **Poussez vos modifications vers votre fork**
```bash
git push origin nom-de-votre-branche
```
6. **Créez une Pull Request**
- Rendez-vous sur le dépôt d’origine.
- Cliquez sur New Pull Request.
- Décrivez clairement les changements apportés.

### ✅ Règles à suivre
- Respecter les conventions de nommage et de style du projet.
- Proposer des solutions claires et efficaces.

## 📚 Guide de Nommage des Branches et des Commits

Pour maintenir un projet clair et organisé, merci de suivre ces conventions de nommage pour les branches et les commits.

### 🔖 Nommage des Branches

Utilisez le format suivant :  
`type/description-courte`

**Types de branches :**
- `feature/` → Pour ajouter une nouvelle fonctionnalité
- `fix/` → Pour corriger un bug
- `hotfix/` → Pour corriger un bug critique en production
- `chore/` → Pour les tâches de maintenance (mise à jour des dépendances, configuration)
- `refactor/` → Pour la restructuration du code sans ajout de fonctionnalité
- `docs/` → Pour les modifications de documentation
- `test/` → Pour l’ajout ou la modification de tests

**Exemples :**
- `feature/ajout-authentification-google`
- `fix/correction-bug-connexion`
- `docs/mise-a-jour-readme`
- `refactor/nettoyage-code-dashboard`

---

### 📝 Conventions de Commit

Utilisez le format suivant pour vos messages de commit :  
`<type> : <description courte>`

**Types de commits :**
- `✨ Ajout` → Nouvelle fonctionnalité
- `🐛 Correction` → Correction d’un bug
- `🔥 Suppression` → Suppression de code ou de fichiers inutiles
- `♻️ Refactor` → Amélioration ou réécriture du code
- `📝 Docs` → Modification de la documentation
- `🚀 Déploiement` → Préparation au déploiement
- `✅ Test` → Ajout ou modification de tests
- `🔧 Config` → Modification de la configuration ou des outils

**Exemples :**
- `✨ Ajout : système de paiement sécurisé`
- `🐛 Correction : erreur de connexion utilisateur`
- `📝 Docs : mise à jour du guide d'installation`
- `♻️ Refactor : optimisation de la logique de recherche`
- `🔥 Suppression : fichiers inutilisés dans le dossier public`

---


