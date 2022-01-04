import socket 
IP = '0.0.0.0'
PORT = 8000
server = socket.socket(socket.AF_INET, socket.SOCK_STREAM) 
server.bind((IP, PORT))
server.listen(1000)
print(f'[+] Listening on {IP}:{PORT}') 
while True: 
	client, address = server.accept()
	print(f'[+] Accepted connection from {address}') 
	request = client.recv(1024)
	#request = request.decode("UTF-8")
	print (f"this data from browser {request}")
	data = input(">>> ")
	data = data.encode("UTF-8")
	client.sendall(data)
	client.close()
