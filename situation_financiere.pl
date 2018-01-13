commerce(ihab).
commerce(soumaya).
cdi(ahmed).
cdi(chaimae).
revenu(3000,ihab).
revenu(3000,soumaya).
revenu(4000,chaimae).
credit(chaimae).
credit(mohammed).

couple_commerce(X,_):-
    commerce(X).
couple_commerce(_,Y):-
    commerce(Y).
couple_cdi(X,_):-
    cdi(X).
couple_cdi(_,Y):-
    cdi(Y).

emploi_fixe(X,Y):-
    couple_commerce(X,Y),!.

emploi_fixe(X,Y):-
    couple_cdi(X,Y).

verifie_revenu(X,Y):-
    revenu(S,X),
    revenu(L,Y),
    R is S+L,
    R >= 6000.

couple_pas_credit(X,Y):-
    not(credit(X)),
    not(credit(Y)).

stable(X,Y):-
    emploi_fixe(X,Y),
    verifie_revenu(X,Y),
    couple_pas_credit(X,Y).



