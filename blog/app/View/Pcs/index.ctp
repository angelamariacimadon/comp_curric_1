<h1>Pcs do Blog</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Memoria</th>
        <th>Data de Criação</th>
          <th>modificado em</th>
           <th>acoes</th>

              </tr>


    <?php foreach ($pcs as $pc): ?>
    <tr>
        <td><?php echo $pc['Pc']['id']; ?></td>
 <td><?php echo $this->Html->link($pc['Pc']['marca'], array('controller' => 'pcs', 'action' => 'view', $pc['Pc']['id'])); ?></td>
 <td><?php echo $this->Html->link($pc['Pc']['modelo'], array('controller' => 'pcs', 'action' => 'view', $pc['Pc']['id'])); ?></td>
 <td><?php echo $this->Html->link($pc['Pc']['memoria'], array('controller' => 'pcs', 'action' => 'view', $pc['Pc']['id'])); ?></td>
        <td><?php echo $pc['Pc']['created']; ?></td>
        <td><?php echo $pc['Pc']['modified']; ?></td>

                <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $pc['Pc']['id'])         
            )?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $pc['Pc']['id']));?>
        </td>

    </tr>
    <?php endforeach; ?>


</table>