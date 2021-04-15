<?php getHeader("Microbackend PHP"); ?>

    <div class="container">
        <h1>Welcome to Microbackend PHP!</h1>
        <p>This framework is more or less a proof of concept more than anything. Feel free to modify it as you please!</p>
        <p>Here's some sample data passed into the <span>home.php</span> view from the <span>homeController.php</span> controller:</p>
        <code><?php print_r($data); ?></code>
        <p>The document will end after this element. Below this is raw JSON output created via the <span>renderAPIResponse()</span> function found in <span>homeController.php</span>.</p>
    </div>

<?php getFooter(); ?>