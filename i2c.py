import smbus
import time
import MySQLdb


bus = smbus.SMBus(1)

address = 0x04 

db = MySQLdb.connect(host="localhost",  user="achilleas", passwd="monogiaemena",db="mydb")  
cursor = db.cursor()

def writeNumber(value):
    bus.write_byte(address,value)
    return -1

def readNumber():
        number =bus.read_byte(address)
        return number

while True:
        var = input("enter 1 - 9:")
        if not var:
            continue
        writeNumber(int(var))
        cursor.execute("INSERT INTO `mydb`.`kairos` (`ora`, `thermokrasia`, `igrasia`) VALUES (CURRENT_TIME(), %s, %s );",(var,var))
        db.commit()
        print ("RPI: Hi bois, i sent u:" , var)



time.sleep(1)

number = readNumber()
print("I recieved tade:", number)
