CREATE TABLE recetas(
    id_receta INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(60) NOT NULL,
    autor VARCHAR(60),
	categoria VARCHAR(60),
	descripcion LONGTEXT,
	ingredientes VARCHAR(200),
	preparacion LONGTEXT,
	tiempo VARCHAR(40),
	dificultad VARCHAR(20)
);

INSERT INTO recetas VALUES (
    NULL,
    "Fish & Chips",
    "el cocinillas",
    "Pescado, Patatas, Frito, Fácil",
    "Que se haya terminado la Navidad y que nos hayamos hecho el propósito de comer más sano y demás tampoco significa que hayan llegado Los Juegos del Hambre y si el chef Jamie Oliver, que siempre nos da consejos para comer mejor y más sano, nos propone en su web una auténtica receta británica para preparar Fish and Chips, nosotros encantados de prepararla y compartirla con todos vosotros. Es uno de los rebozados que mejor resultado dan para freír pescados blancos, porque quedan crujientes por fuera, jugosos por dentro y apenas absorben aceite. Lo habitual es acompañarlos con una crema de guisantes con menta, pero también valen unos guisantes cocidos con nuestra salsa favorita como puede ser una holandesa.",
    "Harina de trigo, 225 g y un poco más para enharinar el pescado#Cerveza muy fría, 285 ml#Patatas para freír#1 mediana por persona#Aceite para freír#Sal#",
    "En un bol ponemos la cerveza bien fría. Aparte mezclamos la harina con la levadura tipo Royal y vamos tamizando la mezcla sobre la cerveza a la vez que batimos con unas varillas manuales. El objetivo es conseguir una papilla con la consistencia que veis en las imágenes.#Secamos bien los trozos de pescado con papel absorbente -este paso es importante sobre todo si usamos pescado que acabamos de descongelar-, los salamos al gusto y los pasamos por harina de trigo sacudiendo el exceso, con esto conseguiremos que el rebozado no se escurra.#Ponemos a calentar abundante aceite en una sartén honda a fuego medio alto y no empezaremos a freír nuestros trozos de pescado hasta que el aceite esté caliente pero sin llegar a humear. Sabremos que está a la temperatura correcta si dejamos caer una cucharadita del rebozado e inmediatamente se forman burbujas alrededor.#Cuando el aceite esté listo, pasamos los trozos de pescado enharinados por el rebozado y los vamos colocando con cuidado en el aceite para evitar salpicaduras. Los freímos durante unos 3 – 4 minutos por cada lado, dependiendo del grosor de los filetes, hasta que estén dorados.#Según estén, los vamos sacando del aceite y los dejamos escurrir sobre una rejilla o un colador, ya que si los ponemos sobre papel quedarán menos crujientes.#Servimos acompañados de patatas fritas, guisantes cocidos y salsa holandesa que podemos aromatizar con algunas especias.",
    "20 minutos",
    "Fácil");
    
INSERT INTO recetas VALUES (
	NULL,
	"Pollo al salmorejo",
	"Victor Peralta",
	"Carne, Pollo, Sano, Fácil",
	"El pollo al salmorejo es una receta fantástica, típica de las Islas Canarias, para incluir este tipo de carne en nuestra dieta, pues es una receta sencilla, fácil y con tan solo media hora de cocción",
	"1 pollo (o cuatro contramuslos)#6 dientes de ajo#1 cucharadita de comino molido#1 cucharadita de orégano seco#1 cucharadita de tomillo molido#1 rama de perejil#2 vasos de vino blanco#1 vaso pequeño de vinagre#1 chorro de aceite de oliva#2 hojas de laurel#1 pizca de sal#1 pizca de pimienta negra recién molida",
	"Trocea el pollo en en 8 partes. Si has optado por utilizar 4 contramuslos de pollo, pártelos igualmente en dos. Añade sal y pimienta al gusto por las dos caras.#Pela los dientes de ajo y añádelos al vaso de la batidora junto con el comino, el tomillo, el orégano, las hojas de la rama de perejil, el vasito pequeño de vinagre y un vaso de vino blanco (unos 200 ml). Tritura con la batidora estos ingredientes.#Embadurna con la mezcla obtenida los trozos de pollo. Pon el pollo en una fuente y riégalo con el resto de la mezcla de vino y especias. Cubre el recipiente con papel film y resérvalo en la nevera durante, al menos, 4 horas o, mejor aún, toda una noche. De esta forma, el pollo al salmorejo quedará más sabroso.#Pasado el tiempo de reposo, pon en una olla amplia un chorrito de aceite de oliva y caliéntalo a fuego fuerte. Saca los trozos de pollo del macerado (guarda el líquido resultante) y dora en el aceite los trozos de pollo por ambos lados.#Cuando estén doraditos, añade el líquido de maceración e incorpora un vaso más de vino blanco. Rasca el fondo de la olla con una cuchara para que los jugos de dorar el pollo se impregnen en la salsa. Tapa y cuece el pollo al salmorejo a fuego suave durante 30-35 minutos.#Retira la cazuela del fuego y deja reposar la preparación tapada durante unos minutos. Sirve el pollo al salmorejo caliente.#",
	"4 horas",
	"Fácil"
);
