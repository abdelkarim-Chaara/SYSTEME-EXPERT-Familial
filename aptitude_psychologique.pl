%Base de faits%

violent(mohammed).
violent(chaimae).
laxiste(mohammed).
laxiste(chaimae).
critique(mohammed).
critique(chaimae).
culpabilisateur(mohammed).
culpabilisateur(chaimae).
paranoiaque(mohammed).
paranoiaque(chaimae).
envahissant(mohammed).
envahissant(chaimae).
patient(ihab).
patient(soumaya).
encourageant(ihab).
encourageant(soumaya).
empathique(ihab).
empathique(soumaya).





%Base de regles%

parent_toxique(X):-
   violent(X).

parent_toxique(X):-
   laxiste(X).

parent_toxique(X):-
   critique(X).

parent_toxique(X):-
   culpabilisateur(X).

parent_toxique(X):-
   paranoiaque(X).

parent_toxique(X):-
   envahissant(X).

bon_parent(X):-
    patient(X);
    encourageant(X);
    empathique(X).


parent_apte(X):-
    not(parent_toxique(X)),
    bon_parent(X).


apte(X,Y):-
    parent_apte(X),
    parent_apte(Y).




