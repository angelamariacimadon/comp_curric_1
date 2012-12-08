<h1>Pcs do Blog</h1>
<p>

    <?php echo $this->Html->link("Novo Item", array('controller' => 'pcs', 'action' => 'add'), array('class' => 'btn btn-success')); ?>
</p>




<table class="table table-hover">

    <tr>
        <th>Id</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Memoria</th>
        <th>Data de Criação</th>
          <th>Modificado em</th>
           <th>Ações</th>

              </tr>


    <?php foreach ($pcs as $pc): ?>
    <tr>
        <td><?php echo $pc['Pc']['id']; ?></td>
 <td><?php echo $this->Html->link($pc['Pc']['marca'], array('controller' => 'pcs', 'action' => 'view', $pc['Pc']['id'])); ?></td>
 <td><?php echo $this->Html->link($pc['Pc']['modelo'], array('controller' => 'pcs', 'action' => 'view', $pc['Pc']['id'])); ?></td>
 <td><?php echo $this->Html->link($pc['Pc']['memoria'], array('controller' => 'pcs', 'action' => 'view', $pc['Pc']['id'])); ?></td>
        <td><?php echo $pc['Pc']['created']; ?></td>
        <td><?php echo $pc['Pc']['modified']; ?></td>
        <td><?php echo $this->Html->link('Visualizar', 
                array('controller'=>'pcs', 'action' => 'view', $pc["Pc"]["id"]), 
                array('class' => 'btn'))?></td>


          <td><?php echo $this->Html->link('Editar', 
                array('action' => 'edit', $pc['Pc']['id']), 
                array('class' => 'btn btn-primary'));?></td>
        <td><?php echo $this->Form->postLink('Deletar', 
                array('action' => 'delete', $pc['Pc']['id']), 
                array('class' => 'btn btn-primary'))?></td>     




    </tr>
    <?php endforeach; ?>


</table>