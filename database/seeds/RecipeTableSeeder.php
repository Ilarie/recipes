<?php

use Illuminate\Database\Seeder;
use Recipes\User;
use Recipes\Recipe;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::create([ 
        				'title' => 'Le tagliatelle di Nonna Pina',
        				'description' => "Versate la farina sulla spianatoia facendo la fontana, versate al centro un pizzico di sale e poi le uova.
									Iniziate ad amalgamare le uova con la farina usando una forchetta, poi continuate a lavorare la pasta con le mani. 
									Se l'impasto sembra troppo mollo unite altra farina, mentre se fosse troppo sodo bagnate con un goccio di vino bianco secco o di acqua; 
									questo può succedere perché le uova, sopratutto quelle bio non sono tutte uguali, a volte sono molto gradi a volte molto piccole.
									Lavorate la pasta fino a quando sarà liscia ed omogenea. Fate una palla e fasciatela con la pellicola alimentare, lasciatela riposare almeno un'oretta.
									A questo punto dovete stendere la pasta; potete farlo con la Nonna Papera.Noi le tagliatelle le preferiamo non sottilissime e quindi ci fermiamo al penultimo livello della Nonna Papera.
									Per ottenere le tagliatelle usate l'apposito rullo della Nonna Papera, oppure arrotolate la sfoglia e tagliatela con un coltello affilato. 
									Allargate le tagliatelle su un ampio vassoio ampio coperto da uno strofinaccio e abbondante farina, ed allargatele bene.
									A questo punto lasciatele riposare un pochino prima di cuocerle, ma potete lasciarle asciugare completamente e poi conservarle coperte da un altro strofinaccio per un paio di giorni in un posto fresco.",
        				'user_id' => 3
        ]);

        Recipe::create([ 
        				'title' => 'Pollo al curry',
        				'description' => "Preparare il pollo tagliandolo a striscioline e metterlo in una terrina a insaporire con il curry.
									Tagliare finemente la cipolla e la carota, in una padella mettere un filo d’olio e cuocere il soffritto per qualche minuto.
									Aggiungere il pollo a pezzettini e rosolarlo per bene.
									Cuocere per 10 minuti, regolare di sale e aggiungere il latte, la farina e un altro po’ di polvere di curry.
									Lasciare cuocere per altri 10 minuti circa, e se si asciuga troppo unire altro latte.",		
						'user_id' => 2
        ]);

        Recipe::create([ 
        				'title' => 'Pollo al forno con patate',
        				'description' => "Rifilare le cosce e le sovracosce di pollo per eliminare il grasso in eccesso. Tamponarle bene con carta da cucina.
									Lavare accuratamente le patate, sbucciarle e tagliarle a spicchi. Lavare il rosmarino.
									Ungere una capace pirofila con l'olio, mettere le patate, il pollo, una macinata di pepe e cospargere di salamoia bolognese (o sale aromatico) e mescolare.
									Aggiungere l'aglio spellato e il rosmarino spezzettando il rametto in più punti. Cospargere con abbondante Parmigiano grattugiato.
									Infornare a 200° C per 40 minuti. Controllare la cottura prima di sfornare. Accedere in grill per qualche minuto se le patate non sono ben dorate.",				
        				'user_id' => 3
        ]);
		
		Recipe::create([ 
        				'title' => 'Frittata di zucchine',
        				'description' => "Per preparare la frittata di zucchine iniziate dalla preparazione delle verdure: lavatele ed asciugatele. 
								Prendete quelle piccole, tagliatele a rondelle molto sottili e versatele in una ciotola. Insaporitele con un filo di olio.
								Aromatizzate con delle foglioline di menta spezzettate in maniera grossolana. Aggiustate di sale e pepe. Tenetele da parte. 
								Passate alle zucchine di medie dimensioni e tagliatele a fettine, nel senso della lunghezza.
								Fate cuocere le zucchine tagliate a cubetti (10) a fuoco vivace per 7-8 minuti. Regolate di sale e pepe. 
								Una volta che saranno pronte, tenetele da parte e dedicatevi alle uova per la frittata. Sbattete le uova con una frusta a mano oppure con una forchetta.
								Regolate di sale e pepe, quindi unite il formaggio grattugiato poco alla volta per incorporarlo bene alle uova.
								Aggiungete nella padella con le zucchine a tocchetti le uova sbattute e coprite con il coperchio facendo cuocere per 8 minuti a fuoco moderato.",				
        				'user_id' => 2
        ]);

        Recipe::create([
        				'title' => 'Torta della nonna supercioccolatosa',
        				'description' => "Con la stessa modalità usata per la ricetta del tortino al cuore caldo di cioccolata fondente,  fate sciogliere in un pentolino il cioccolato con il burro a bagnomaria.
								In un recipiente a parte sbattete solamente i tuorli con lo zucchero montandoli per bene per cercare di incorporare più aria possibile. 
								Unite quindi la farina setacciata, incorporandola a poco a poco e mescolando con movimenti dal basso verso l’alto per non smontare il composto.
								Dopo che avrete unito tutta la farina, unite il cioccolato fuso (tiepido e non bollente!).
								Per concludere e rendere la torta più morbida, montate gli albumi a neve ferma e incorporateli poco alla volta all’impasto, sempre amalgamando dal basso verso l’alto con una palettina di silicone.
								Imburrate una teglia da forno di circa 24 cm e versateci dentro il composto. Cuocete in forno statico a 180° per circa 25/30 minuti.
								Una volta cotta, sfornate la torta al cioccolato supercioccolatosa e fatela raffreddare in teglia. Completate cospargendo la superficie della torta di zucchero a velo.",
        				'user_id' => 3
        ]);

        Recipe::create([
        				'title' => 'Pasta al forno',
        				'description' => "1) Lessa al dente in abbondante acqua salata 320 g di pennette. 
								2) Nel frattempo, grattugia il pecorino e taglia 150 g di mozzarella a dadini.
								3) Prepara il condimento amalgamando 4 dl di salsa di pomodoro, 40 g di olive nere, 15 g di capperini dissalati, abbondante pecorino grattugiato e la mozzarella a dadini.
								4) Quando le pennette sono cotte al dente, scolale, passale per qualche istante sotto l'acqua fredda per farle intiepidire, quindi uniscile al condimento di pomodoro, mescolando bene.
								5) Metti il composto in una pirofila, cospargi con pecorino e pangrattato e fai gratinare in forno già caldo a 200° per 10-15 minuti.",
        				'user_id' => 3
        ]);
    }
}
