<?php $this->load->view("template/load-styles"); ?>

<h4>This is header Section</h>

<p>Area to load Dynamic Content</p>

<p><?php $this->load->view($page_content); ?></p>
<h4>This is footer section </h4>

<?php $this->load->view("template/load-scripts"); ?>