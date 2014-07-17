<h1>Blog Posts</h1>
<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add')
); ?>
	<table>
		<thead>
			<tr>
				<th>Title</th>
				<th>Body</th>
				<th>Created</th>
				<th>Link</th>
				<th>Action</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($posts as $key => $post) : ?>
				<tr>
						<td><?php echo $post["Post"]["title"]; ?></td>
						<td><?php echo $post["Post"]["body"]; ?></td>
						<td><?php echo $post["Post"]["created"]; ?></td>
						<td><?php echo $this->Html->link($post["Post"]["title"],array("controller" => "posts","action"=>"view", $post["Post"]["id"]) ); ?></td>
						<td><?php echo $this->Html->link("Edit", array("controller"=>"Posts", "action" => "edit", $post["Post"]["id"])) ; ?></td>

						<td><?php                 echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                ); ?></td>

				</tr>
		<?php endforeach; ?>
		</tbody>

	</table>