import random
from socket import *
from Scripts._socket import AF_INET, SOCK_DGRAM

serverSocket = socket(AF_INET, SOCK_DGRAM)
serverSocket.bind(('127.0.0.1', 8000))

while True:
    rand = random.randint(0, 10)
    message, address = serverSocket.recvfrom(1024)
    message = message.upper()

    if rand < 4:
        continue

    serverSocket.sendto(message, address)