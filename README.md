# PJ-Pizzaria
 Este projeto é um sistema de pedidos de uma Pizzaria. O objeto de estudo aqui é a conexão de PHP + BD, PHP e a WEB, Regras de negócio complexas e múltiplas integrações. A ideia seria ter uma tela onde se pode fazer o pedido, e uma dashboard para adminsitrá-los

 ## Como está o projeto?
 O projeto está totalmente funcional e responsivo. Caso queira experimentar, basta baixar e executar (Seguindo as instruções da Seção: Rodar o projeto). É possível fazer pedidos, editar o status do pedido e deletá-lo. Além disso, o projeto está totalmente responsivo

### Capturas de tela
Tela de pedidos:
![Home](img/pedido.png)

Dashboard:
![Login_Registro](img/dashboard.png)

## Rodar o projeto
Caso queira rodar o projeto em sua máquina local será necessário o Apache e o Banco de Dados Mysql. Recomendo a instalação do **Laragon**, que é um pacote de instalaçaões que traz esses 2 serviços. Basta jogar o projeto na pasta *www* e colocar o banco de dados base disponível na pasta Database no servidor local (Pode-se fazer isso pelo PHPMyadmin). OBS: Talvez seja necessário mudar o arquivo db.php deixando a variável password vazia.

```php
   $pass = "";
```

 ## Stack
 As tecnologias usadas nesse projeto são:
 * HTML
 * CSS
 * PHP
 * Bootstrap
 * Ion Icons
 * MySQL
