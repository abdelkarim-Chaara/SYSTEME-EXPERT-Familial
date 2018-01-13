femme(soumaya).
femme(rihanna).
femme(youssra).
femme(ouafae).
femme(rania).
femme(oumaima).
femme(karima).
femme(lina).
femme(hajar).

homme(ihab).
homme(mohamed).
homme(karim).
homme(soufyane).
homme(hatim).
homme(amine).
homme(tarik).
homme(aymane).
homme(abdelkarim).

type(soumaya,reformateur).
type(rihanna,individualiste).
type(rania,investigateur).
type(ouafae,enthousiaste).
type(youssra,challenger).
type(oumaima,pacifiste).
type(lina,assistant).
type(karima,realisateur).
type(hajar,loyal).

type(ihab,reformateur).
type(mohamed,individualiste).
type(karim,investigateur).
type(soufyane,enthousiaste).
type(hatim,challenger).
type(amine,pacifiste).
type(tarik,assistant).
type(aymane,realisateur).
type(abdelkarim,loyal).


sociabilite(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.

sociabilite(X,A,B,A,B1):-
    X = 2,
    B1 is B +1.

colere(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.

colere(X,A,B,A,B1):-
    X = 2,
    B1 is B+1.

intelligence(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.

intelligence(X,A,B,A,B1):-
    X = 2,
    B1 is B +1.

affection(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.

affection(X,A,B,A,B1):-
    X = 2,
    B1 is B+1.

experience(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.

experience(X,A,B,A,B1):-
    X = 2,
    B1 is B+1.

egoisme(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.

egoisme(X,A,B,A,B1):-
    X = 2,
    B1 is B+1.

esprit(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
esprit(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.

romantisme(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
romantisme(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.

confrontation(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
confrontation(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.

diplomatie(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
diplomatie(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
concentration(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
concentration(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
mental(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
mental(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.

confiance(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
confiance(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.

priorite(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
priorite(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.

franc_parler(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
franc_parler(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.

flexibilite(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
flexibilite(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.

audace(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
audace(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.

dependance(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
dependance(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
emotions(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
emotions(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
aventure(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
aventure(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
soutien(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
soutien(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
force(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
force(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
succes(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
succes(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
tranquilite(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
tranquilite(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
douceur(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
douceur(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
inquietude(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
inquietude(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
agacement(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
agacement(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
soucis(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
soucis(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
autonomie(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
autonomie(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
lunatisme(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
lunatisme(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
autres(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
autres(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
extravertisme(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
extravertisme(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
timidite(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
timidite(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
securite(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
securite(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
conflit(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
conflit(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.
exigence(X,A,B,A1,B):-
    X = 1,
    A1 is A+1,!.
exigence(X,A,B,A,B1):-
    X=2,
    B1 is B + 1.

max([X],X).
max([X|T],X):-
    max(T,Y),
    X>Y,!.
max([_|T],Z):-
    max(T,Z).

pos(X,[X|_], Len, Len):- !.

pos(X,[_H| T], LE, LF) :-
  L1 is LE + 1,
  pos(X,T, L1, LF).

afficher([H|T]):-
    write(H),
    afficher(T).

verifier(N,'reformateur'):-
    N=0,!.
verifier(N,'assistant'):-
    N=1,!.
verifier(N,'realisateur'):-
    N=2,!.
verifier(N,'individualiste'):-
    N=3,!.
verifier(N,'investigateur'):-
    N=4,!.
verifier(N,'loyal'):-
    N=5,!.
verifier(N,'enthousiaste'):-
    N=6,!.
verifier(N,'challenger'):-
    N=7,!.
verifier(N,'pacifiste'):-
    N=8.

ajouter_fichier(Nom,Type):-
    asserta(type(Nom,Type)).



calcul_type(Nom,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14,Q15,Q16,Q17,Q18,Q19,Q20,Q21,Q22,Q23,Q24,Q25,Q26,Q27,Q28,Q29,Q30,Q31,Q32,Q33,Q34,Q35,Q36):-
    A1 is 0,
    B1 is 0,
    C1 is 0,
    D1 is 0,
    E1 is 0,
    F1 is 0,
    G1 is 0,
    H1 is 0,
    I1 is 0,
    esprit(Q1,I1,F1,I2,F2),
    romantisme(Q2,E1,B1,E2,B2),
    confrontation(Q3,G1,A1,G2,A2),
    diplomatie(Q4,C1,D1,C2,D2),
    concentration(Q5,H1,I2,H2,I3),
    sociabilite(Q6,F2,E2,F3,E3),
    colere(Q7,B2,A2,B3,A3),
    intelligence(Q8,G2,D2,G3,D3),
    affection(Q9,F3,H2,F4,H3),
    experience(Q10,C2,I3,C3,I4),
    egoisme(Q11,E3,A3,E4,A4),
    mental(Q12,H3,G3,H4,G4),
    confiance(Q13,D3,B3,D4,B4),
    priorite(Q14,F4,C3,F5,C4),
    franc_parler(Q15,E4,I4,E5,I5),
    flexibilite(Q16,H4,D4,H5,D5),
    audace(Q17,B4,G4,B5,G5),
    dependance(Q18,A4,F5,A5,F6),
    emotions(Q19,C4,E5,C5,E6),
    aventure(Q20,B5,I5,B6,I6),
    soutien(Q21,F6,D5,F7,D6),
    force(Q22,G5,C5,G6,C6),
    succes(Q23,C6,H5,C7,H6),
    tranquilite(Q24,H6,A5,H7,A6),
    douceur(Q25,B6,F7,B7,F8),
    inquietude(Q26,I6,G6,I7,G7),
    agacement(Q27,E6,D6,E7,D7),
    soucis(Q28,A6,I7,A7,I8),
    autonomie(Q29,B7,C7,B8,C8),
    lunatisme(Q30,H7,E7,H8,E8),
    autres(Q31,G7,F8,G8,F9),
    extravertisme(Q32,I8,D7,I9,D8),
    timidite(Q33,A7,C8,A8,C9),
    securite(Q34,H8,B8,H9,B9),
    conflit(Q35,E8,G8,E9,G9),
    exigence(Q36,A8,D8,A9,D9),
    max([A9,B9,C9,D9,E9,F9,G9,H9,I9],R),
    pos(R,[A9,B9,C9,D9,E9,F9,G9,H9,I9],0,N),
    verifier(N,Type),
    write(Type),
    ajouter_fichier(Nom,Type).

trouver_femme(Nom,Personne):-
    type(Nom,Type),
    Type = 'reformateur',
    type(Personne,'assistant'),
    femme(Personne),!.

trouver_femme(Nom,Personne):-
    type(Nom,Type),
    Type = 'assistant',
    type(Personne,'individualiste'),
    femme(Personne),!.

trouver_femme(Nom,Personne):-
    type(Nom,Type),
    Type = 'realisateur',
    type(Personne,'pacifiste'),
    femme(Personne),!.
trouver_femme(Nom,Personne):-
    type(Nom,Type),
    Type = 'individualiste',
    type(Personne,'assistant'),
    femme(Personne),!.
trouver_femme(Nom,Personne):-
    type(Nom,Type),
    Type = 'investigateur',
    type(Personne,'reformateur'),
    femme(Personne),!.
trouver_femme(Nom,Personne):-
    type(Nom,Type),
    Type = 'loyal',
    type(Personne,'assistant'),
    femme(Personne),!.
trouver_femme(Nom,Personne):-
    type(Nom,Type),
    Type = 'enthousiaste',
    type(Personne,'reformateur'),
    femme(Personne),!.
trouver_femme(Nom,Personne):-
    type(Nom,Type),
    Type = 'challenger',
    type(Personne,'assistant'),
    femme(Personne),!.
trouver_femme(Nom,Personne):-
    type(Nom,Type),
    Type = 'pacifiste',
    type(Personne,'individualiste'),
    femme(Personne),!.

trouver_homme(Nom,Personne):-
    type(Nom,Type),
    Type = 'reformateur',
    type(Personne,'pacifiste'),
    homme(Personne),!.

trouver_homme(Nom,Personne):-
    type(Nom,Type),
    Type = 'assistant',
    type(Personne,'challenger'),
    homme(Personne),!.

trouver_homme(Nom,Personne):-
    type(Nom,Type),
    Type = 'realisateur',
    type(Personne,'reformateur'),
    homme(Personne),!.
trouver_homme(Nom,Personne):-
    type(Nom,Type),
    Type = 'individualiste',
    type(Personne,'pacifiste'),
    homme(Personne),!.

trouver_homme(Nom,Personne):-
    type(Nom,Type),
    Type = 'investigateur',
    type(Personne,'reformateur'),
    homme(Personne),!.
trouver_homme(Nom,Personne):-
    type(Nom,Type),
    Type = 'loyal',
    type(Personne,'challenger'),
    homme(Personne),!.
trouver_homme(Nom,Personne):-
    type(Nom,Type),
    Type = 'enthousiaste',
    type(Personne,'investigateur'),
    homme(Personne),!.
trouver_homme(Nom,Personne):-
    type(Nom,Type),
    Type = 'challenger',
    type(Personne,'pacifiste'),
    homme(Personne),!.
trouver_homme(Nom,Personne):-
    type(Nom,Type),
    Type = 'pacifiste',
    type(Personne,'individualiste'),
    homme(loyal),!.


trouver_partenaire(Nom):-
    homme(Nom),
    trouver_femme(Nom,Femme),
    write(Femme),!.

trouver_partenaire(Nom):-
    femme(Nom),
    trouver_homme(Nom,Homme),
    write(Homme).



homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
homme().
type(,).
homme().
type(,).
homme(chaara).
type(chaara,challenger).
homme(chaara).
type(chaara,challenger).
