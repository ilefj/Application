<h1>               liste utilisateur </h1>
      <table>
        <tr>
                    
          <th>ID</th>
          <th>name</th>
          <th>lastname</th>
          <th>email</th>
          <th>birthday</th>
          <th>role</th>
          <th>created_at</th>
          <th>update_at</th>
          <th>Action</th>
                   
                   
        </tr>
      
                       @foreach($users as $key =>$u)    
                <tr> 
                  <td>{{ $u -> id}}</td>
                  <td>{{ $u -> name}}</td>
                  <td>{{ $u -> lastname}}</td>
                  <td>{{ $u -> email}}</td>
                  <td>{{ $u -> birthday}}</td>
                  <td>{{ $u -> role}}</td>
                  <td>{{ $u -> created_at}}</td>
                  <td>{{ $u -> updated_at}}</td>
                 <td>