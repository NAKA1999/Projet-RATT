# quiz_chien.py

import os
import random

def poser_question(texte, options):
    """
    Pose une question à l'utilisateur avec validation.
    """
    reponse = ""
    options = [opt.lower() for opt in options]  # normaliser les options
    while reponse not in options:
        reponse = input(f"{texte} ({'/'.join(options)}) : ").strip().lower()
        if reponse not in options:
            print("Réponse invalide. Veuillez réessayer.")
    return reponse

def charger_chiens(fichier):
    """
    Lit les données du fichier chien.txt et les stocke sous forme de dictionnaire.
    """
    chiens = []
    with open(fichier, 'r', encoding='utf-8') as f:
        for ligne in f:
            ligne = ligne.strip()
            if ligne:
                taille, activite, logement, enfants, race = ligne.split(";")
                chiens.append({
                    "taille": taille,
                    "activite": activite,
                    "logement": logement,
                    "enfants": enfants,
                    "race": race
                })
    return chiens

def recommander_chien(chiens, preferences):
    """
    Recherche un chien correspondant exactement aux préférences.
    Sinon, retourne une suggestion aléatoire.
    """
    for chien in chiens:
        if (chien["taille"] == preferences["taille"] and
            chien["activite"] == preferences["activite"] and
            chien["logement"] == preferences["logement"] and
            chien["enfants"] == preferences["enfants"]):
            return chien["race"]

    # Si aucun chien ne correspond parfaitement, on en propose un au hasard
    return random.choice(chiens)["race"] if chiens else None

def main():
    """
    Fonction principale : interaction avec l'utilisateur.
    """
    print("=" * 50)
    print("Bienvenue sur le questionnaire 'Quel chien est fait pour vous ?'")
    print("=" * 50)
    print()

    logement = poser_question("Tu vis en", ["appartement", "maison"])
    activite = poser_question("Es-tu sportif ?", ["oui", "non"])
    enfants = poser_question("As-tu des enfants ?", ["oui", "non"])
    taille = poser_question("Quelle taille de chien préfères-tu ?", ["petit", "moyen", "grand"])

    # Conversion des réponses en format standard pour la comparaison
    preferences = {
        "logement": logement,
        "activite": "actif" if activite == "oui" else "calme",
        "enfants": "enfants" if enfants == "oui" else "pas_enfants",
        "taille": taille
    }

    fichier_chiens = "chien.txt"
    if not os.path.exists(fichier_chiens):
        print("Erreur : le fichier chien.txt est introuvable.")
        return

    chiens = charger_chiens(fichier_chiens)
    race = recommander_chien(chiens, preferences)

    print("\nRésultat :")
    if race:
        print(f"Le chien qui correspond à ton profil est : {race}")
    else:
        print("Aucun chien n'a pu être trouvé pour ce profil.")

    print("\nMerci d'avoir utilisé notre outil de recommandation.")
    print("-" * 50)

if __name__ == "__main__":
    main()
 