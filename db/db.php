<?php

$Movies = [
   new Movie ('Matrix' , 'Thriller' , ['Keanu Reeves' , 'Laurence Fishburne' , 'Hugo Weaving' , 'Carrie-Anne Moss'] , new Media ('matrix.jpg' , 'Matrix') , 136 , 1999),


   new Movie ('Snow Piercer' , 'Fantascienza' , ['Crhis Evans' , 'Song Kang-ho' , 'Tilda Swinton' , 'Jamie Bell'] , 
   new Media ('snow-piercer.jpg' , 'Snow Piercer') , 126 , 2012),
];

$SerieTvs = [
  new SerieTv ('Game of Thrones' , 'Fantasy' , ['Kit Arrington' , 'Emilia Clark' , 'Jason Momoa' , 'Sean Bean'] , new Media ('got.jpg' , 'Game of Thrones') , 2011 , 2019 , 73 , 8),

  new SerieTv ('Breaking Bad' , 'Drama' , ['Bryan Cranston' , 'Aaron Paul' , 'Anna Gunn' , 'Dean Norris'] , new Media ('BreakingBad.jpg' , 'Braking Bad') , 2008 , 2013 , 64 , 5),
];
