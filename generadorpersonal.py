# INSERT INTO `datos_personales` (`RUT`, `Nombres`, `Apellido_paterno`, `Apellido_materno`, `Email`, `Nacionalidad`, `Domicilio`, `Ciudad`, `Comuna`, `Celular`, `Estado_civil`, `Fecha_nacimiento`) 
# VALUES ('165485479', 'juan', 'gonzales', 'martinez', 'jmartinez@gmail.com', 'chile', 'las asturias #548', 'Temuco', 'Las casas', '76598455', 'casado', '2012-10-17'), 
#        ('145485486', 'martina', 'torres', 'campos', 'matorre@gmail.com', 'chile', 'los alerces #485', 'temuco', 'temuco', '48597584', 'soltero', '2012-10-17');
import random
from turtle import st

persona = []
RUT = []
Nombres = []
Apellido_paterno = []
Apellido_materno = []
Email = []
Nacionalidad = []
Domicilio = []
Ciudad = []
Comuna = []
Celular = []
Estado_civil = []
Fecha_nacimiento = []

BNombres= ["Alan","Jacinto","Martinez","Alicia","Jesús","Mirta","Andrea","Josefina"	,"Mónica","Andrés","Juan","Nicolás","Antonia","Juana","Noé","Antonio","Juárez"
"Noelia","Bartolomé","Julián","Patricio","Belén","Juliana","Renzo","Celeste","Julio","Rodrigo","Edgardo","Leandro","Rodríguez","Felicia","Luis","Romina","Florencia"
,"Luisa","Rosario","Gerardo","Marcos","Tomás"]

BApellidospa= ["González" ,"Gómez"	,"González"	,"Díaz",	"González"	,"González","Rodríguez",	"González"	,"Gómez"	,"González",	"Rodríguez",	"Rodríguez"
,"Fernández"	,"Díaz"	,"Rodríguez"	,"Rodríguez"	,"Fernández"	,"Martínez","Díaz"	,"Fernández"	,"Fernández",	"López",	"Gómez",	"Díaz"
,"Pérez"	,"López",	"Martínez",	"Gómez"	,"López"	,"Fernández","Gómez"	,"Rodríguez"	,"Romero"	,"Flores",	"Martínez","Romero"	,"Benítez",	"Romero",	"García",	
"García","Sosa"	,"Sánchez"	,"López",	"Martínez"	,"Díaz"	,"Pérez"]

BApellidosma= ["González" ,"Gómez"	,"González"	,"Díaz",	"González"	,"González","Rodríguez",	"González"	,"Gómez"	,"González",	"Rodríguez",	"Rodríguez"
,"Fernández"	,"Díaz"	,"Rodríguez"	,"Rodríguez"	,"Fernández"	,"Martínez","Díaz"	,"Fernández"	,"Fernández",	"López",	"Gómez",	"Díaz"
,"Pérez"	,"López",	"Martínez",	"Gómez"	,"López"	,"Fernández","Gómez"	,"Rodríguez"	,"Romero"	,"Flores",	"Martínez","Romero"	,"Benítez",	"Romero",	"García",
"García","Sosa"	,"Sánchez"	,"López",	"Martínez"	,"Díaz"	,"Pérez"]
for i in range(10):
    #rut
    primeros = random.choice((12,13,14,15,16,17,18))
    numero = random.randint(111111, 999999)
    rutificador = random.choice((0,1,2,3,4,5,6,7,8,9))
    Nrut = str(primeros)+"."+str(numero)+"-"+str(rutificador)

    #nombres
    name  =random.choice(BNombres)
    apepa =random.choice(BApellidospa)
    apema =random.choice(BApellidosma)
    #email
    em = name[:1]+apepa[:4]+apema[:4]+"@gmail.com"

    #
    Nacionalida = ["chileno","chileno","chileno","chileno","chileno","chileno","chileno","chileno","chileno","chileno","chileno","chileno","chileno","peruano","argentino",]
    naci = random.choice(Nacionalida)
    calle = ["CAUPOLICÁN","ARTURO PRAT","LAUTARO","LOS NOTROS","LOS CANELOS","SAN MARTIN","LOS ROBLES","BERNARDO OHIGGINS","GALVARINO","PEDRO AGUIRRE CERDA","GABRIELA MISTRAL",
    "PEDRO MONTT","LAUTARO","MANUEL RODRÍGUEZ","LOS ULMOS","LAS ROSAS","ANIBAL PINTO","CAUPOLICAN"]
    num = random.randint(10, 9999)
    direccio = random.choice(calle)+" #"+str(num)

    Ciuda = ["temuco"]
    ciudad = random.choice(Ciuda)
    Comun = ["Temuco", "Padre Las Casas", "Lautaro", "Perquenco", "Vilcún", "Cunco", "Melipeuco", "Curarrehue"," Nueva Imperial", "Carahue", "Saavedra", "Pucón", "Villarrica", "Freire", "Pitrufquén", "Gorbea", "Loncoche", "Toltén", "Teodoro Schmidt", "Cholchol"]
    comuna = random.choice(Comun)

    cel = random.randint(60000000, 90000000)
    Celular = "+569 "+str(cel)

    Estado_civi = ["soltero", "casado"]
    estado =random.choice(Estado_civi)

    año = random.randint(1950, 2002)
    mes = random.randint(1, 12)
    dia = random.randint(1, 28)
    fechanaci = str(año)+"-"+str(mes)+"-"+str(dia)
    print("('"+Nrut+"', "+"'"+name+"', "+"'"+apepa+"', "+"'"+apema+"', "+"'"+em+"', "+"'"+naci+"', "+"'"+direccio+"', "+"'"+ciudad+"', "+"'"+comuna+"', "+
    "'"+Celular+"', "+"'"+estado+"', "+"'"+fechanaci+"')")
    print(",")
