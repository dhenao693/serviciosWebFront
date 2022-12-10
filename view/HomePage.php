<!DOCTYPE html>
<html lang="en" style="height:100%;
  margin:0;
  display: flex;
  flex-direction: column;">

<head>
    <title>Home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="height:100%;
  margin:0;
  display: flex;
  flex-direction: column;background-image: linear-gradient(to top, #09203f 0%, #055160 100%);">
    
    <table class="table table-striped table-hover" id="table-users">
        <thead>
            <tr>
                <th scope="col">Documento</th>
                <th scope="col">Usuario</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <script>
        const readUsers = () => {
            axios.get('http://localhost:8888/users/consultUsers').then(res => {
                const table = document.getElementById('table-users').querySelector('tbody');

                res.data.forEach((user, key) => {
                    console.log(user);
                    
                    
                    const tr = document.createElement('TR');

                    const tdDocument = document.createElement('TD');
                    tdDocument.textContent = user.document;

                    const tdUser = document.createElement('TD');
                    tdUser.textContent = user.user;

                    const tdName = document.createElement('TD');
                    tdName.textContent = user.name;

                    const tdLastName = document.createElement('TD');
                    tdLastName.textContent = user.lastname;


                    tr.appendChild(tdDocument);
                    tr.appendChild(tdUser);
                    tr.appendChild(tdName);
                    tr.appendChild(tdLastName);
                    
                    table.appendChild(tr);
                });
            });
        };
    
    

        readUsers();
        </script>
</body>

</html>