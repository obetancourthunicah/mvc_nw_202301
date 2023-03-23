<main>
  <table>
    <tr>
      <th>Código</th>
      <th>Fecha</th>
      <th>Tipo</th>
      <th>Descripción</th>
      <th>Monto</th>
      <th>
        {{if journals_new}}
          <a href="index.php?page=Mnt-Journal&mode=INS">Nuevo</a>
        {{endif journals_new}}
      </th>
    </tr>
    {{foreach journals}}
    <tr>
      <td>{{journal_id}}</td>
      <td>
        {{if ~journals_view}}
        <a href="index.php?page=Mnt-Journal&mode=DSP&journal_id={{journal_id}}">{{journal_date}}</a>
        {{endif ~journals_view}}
        {{ifnot ~journals_view}}
          {{journal_date}}
        {{endifnot ~journals_view}}
        </td>
      <td>{{journal_type}}</td>
      <td>{{journal_description}}</td>
      <td>{{journal_amount}}</td>
      <td>
        {{if ~journals_edit}}
        <a href="index.php?page=Mnt-Journal&mode=UPD&journal_id={{journal_id}}">Editar</a>
        {{endif ~journals_edit}}
        &nbsp;
        {{if ~journals_delete}}
        <a href="index.php?page=Mnt-Journal&mode=DEL&journal_id={{journal_id}}">Eliminar</a>
        {{endif ~journals_delete}}
      </td>
    </tr>
    {{endfor journals}}
  </table>
</main>
