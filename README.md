<b><h1>Projeto Laravel - Rota fallback e formulário com vardump</h1></b>

<b><h2>Criando a rota fallback</h2></b>
- No arquivo web.php, inserir o seguinte código para ter uma rota fallback, que faz com que o conteúdo dentro da função apareça na página para qualquer rota/url inexistente no site:  
<img width="1650" height="566" alt="image" src="https://github.com/user-attachments/assets/f9741eb2-6e5c-41a4-9f96-a869c1305981" />

<b><h2>Configurando o vardump</h2></b>
- Inserir o seguinte código no arquivo ContatoController.php:
<img width="1133" height="496" alt="image" src="https://github.com/user-attachments/assets/45874e5e-e9c9-4697-b2e3-fca8e7159471" />

- No arquivo contatdo.blade.php, criar um formulário, certificando-se que todos os campos tenham propriedades "name" distintas e a tag form tenha a propriedade action como "{{ route('site.contato') }}" e o method como "get":  
<img width="1026" height="629" alt="image" src="https://github.com/user-attachments/assets/b483f9d1-2f3a-4a40-b05f-a3aa1060fb8b" /><br>

<b><h2>Demonstração do fallback e vardump</h2></b>

- Abrindo uma rota inexistente:
<img width="1920" height="941" alt="image" src="https://github.com/user-attachments/assets/555a8614-cfca-425c-aaa7-adc655c17b2c" />

- Preenchendo formulário:  
<img width="1894" height="2035" alt="image" src="https://github.com/user-attachments/assets/80d4c8ef-fc8a-47e4-9f0d-376e0cb2d71a" /><br>

- Página após o envio:
<img width="1894" height="893" alt="image" src="https://github.com/user-attachments/assets/7644b573-31f0-4e2a-a990-c861fd893147" />
