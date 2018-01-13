%Base de faits%
ville_parc(tanger).
ville_zoo(tanger).
ville_centre(tanger).
ville_bonnes_ecoles(tanger).
ville_langues(tanger).
ville_langues(larache).
ville_bibliotheques(tanger).
ville_polluee(larache).
ville_climat_clement(tanger).
ville_crimes_bas(tanger).
ville_justice(tanger).
ville_descriminatoire(larache).
ville_exploitation(larache).
ville_securite(tanger).
ville_soins(tanger).
ville_protection(tanger).
ville_droits_education(tanger).
ville_droits_loisirs(tanger).
ville_expression(tanger).
ville_protection_violence(tanger).




%Base de regles%
ville_loisirs(X):-
    ville_parc(X).

ville_loisirs(X):-
    ville_zoo(X).

ville_loisirs(X):-
    ville_centre(X).

ville_education(X):-
    ville_bonnes_ecoles(X).

ville_education(X):-
    ville_langues(X).

ville_education(X):-
    ville_bibliotheques(X).

ville_saine(X):-
    not(ville_polluee(X)),
    ville_climat_clement(X),
    ville_crimes_bas(X).

ville_droits_civils(X):-
    ville_justice(X),
    not(ville_descriminatoire(X)).

ville_droits_economiques(X):-
    not(ville_exploitation(X)),
    ville_securite(X).

ville_droits_sociaux(X):-
    ville_soins(X),
    ville_protection(X).

ville_droits_culturels(X):-
    ville_droits_education(X),
    ville_droits_loisirs(X).

ville_droits_politiques(X):-
    ville_expression(X),
    ville_protection_violence(X).

ville_droits_enfants(X):-
    ville_droits_civils(X),
    ville_droits_economiques(X),
    ville_droits_sociaux(X),
    ville_droits_culturels(X),
    ville_droits_politiques(X).



ville(X):-
    ville_loisirs(X),
    ville_education(X),
    ville_saine(X),
    ville_droits_enfants(X).