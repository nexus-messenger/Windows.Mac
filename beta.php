class Main() {
   function Index { 
    server.connected '192.168.1.1'
    server.connected { 
      connected.yes = text('Вы успешо авторизировались')
      connected.no = text('Ошибка соедениения')
       }
         }
      
