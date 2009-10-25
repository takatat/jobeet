<?php use_stylesheet('job.css') ?>
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $jobeet_job->getid() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $jobeet_job->getcategory_id() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $jobeet_job->gettype() ?></td>
    </tr>
    <tr>
      <th>Company:</th>
      <td><?php echo $jobeet_job->getcompany() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $jobeet_job->getlogo() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $jobeet_job->geturl() ?></td>
    </tr>
    <tr>
      <th>Position:</th>
      <td><?php echo $jobeet_job->getposition() ?></td>
    </tr>
    <tr>
      <th>Location:</th>
      <td><?php echo $jobeet_job->getlocation() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $jobeet_job->getdescription() ?></td>
    </tr>
    <tr>
      <th>How to apply:</th>
      <td><?php echo $jobeet_job->gethow_to_apply() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $jobeet_job->gettoken() ?></td>
    </tr>
    <tr>
      <th>Is public:</th>
      <td><?php echo $jobeet_job->getis_public() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $jobeet_job->getis_activated() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $jobeet_job->getemail() ?></td>
    </tr>
    <tr>
      <th>Expires at:</th>
      <td><?php echo $jobeet_job->getexpires_at() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $jobeet_job->getcreated_at() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $jobeet_job->getupdated_at() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('job/edit?id='.$jobeet_job->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('job/index') ?>">List</a>
