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
    "En un bol ponemos la cerveza bien fría. Aparte mezclamos la harina con la levadura tipo Royal y vamos tamizando la mezcla sobre la cerveza a la vez que batimos con unas varillas manuales. El objetivo es conseguir una papilla con la consistencia que veis en las imágenes.#Secamos bien los trozos de pescado con papel absorbente -este paso es importante sobre todo si usamos pescado que acabamos de descongelar-, los salamos al gusto y los pasamos por harina de trigo sacudiendo el exceso, con esto conseguiremos que el rebozado no se escurra.#Ponemos a calentar abundante aceite en una sartén honda a fuego medio alto y no empezaremos a freír nuestros trozos de pescado hasta que el aceite esté caliente pero sin llegar a humear. Sabremos que está a la temperatura correcta si dejamos caer una cucharadita del rebozado e inmediatamente se forman burbujas alrededor.#Cuando el aceite esté listo, pasamos los trozos de pescado enharinados por el rebozado y los vamos colocando con cuidado en el aceite para evitar salpicaduras. Los freímos durante unos 3 – 4 minutos por cada lado, dependiendo del grosor de los filetes, hasta que estén dorados.#Según estén, los vamos sacando del aceite y los dejamos escurrir sobre una rejilla o un colador, ya que si los ponemos sobre papel quedarán menos crujientes.#Servimos acompañados de patatas fritas, guisantes cocidos y salsa holandesa que podemos aromatizar con algunas especias."
