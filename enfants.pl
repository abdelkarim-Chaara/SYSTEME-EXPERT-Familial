
go(X,Y,V):-
    consult(ville),
    ville_appropriee(V),
    consult(aptitude_psychologique),
    couple_apte(X,Y),
    consult(situation_financiere),
    financiere_stable(X,Y),
    consult(possible_avoir_enfants),
    possible_avoir_enfants(X,Y).

