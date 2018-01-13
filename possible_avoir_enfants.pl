%base de donnee des noms avec leurs genre et type %
homme(rhesusplus,ihab).
homme(rhesusmoins,mohammed).
femme(rhesusplus,soumaya).
femme(rhesusmoins,chaimae).

fertile(ihab).
fertile(soumaya).

adoption(ihab).
adoption(soumaya).
%les fonctions qui verifier la compatibilite des sangs%
sang_compatible(X,Y):-
    homme(rhesusmoins,X),
    femme(rhesusplus,Y).

sang_compatible(X,Y):-
    homme(rhesusplus,X),
    femme(rhesusplus,Y).

sang_partenaire(X,Y):-
    sang_compatible(X,Y).

biologique(X,Y):-
    sang_partenaire(X,Y),
    fertile(X),
    fertile(Y).
possibleavoirenfants(X,Y):-
    biologique(X,Y).
possibleavoirenfants(X,Y):-
    adoption(X),
    adoption(Y).

