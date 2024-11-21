<?php
session_start();
if (!isset($_SESSION["data"])) {
    die("No data found.");
}
$data = $_SESSION["data"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div style="max-width: 800px; margin: auto;">
        <h2>Submission Results</h2>
        <table>
            <tr>
                <th>Name</th>
                <td><?= htmlspecialchars($data["name"]) ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= htmlspecialchars($data["email"]) ?></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><?= htmlspecialchars($data["age"]) ?></td>
            </tr>
            <tr>
                <th>Message</th>
                <td><?= nl2br(htmlspecialchars($data["message"])) ?></td>
            </tr>
            <tr>
                <th>Browser/System Info</th>
                <td><?= htmlspecialchars($data["userAgent"]) ?></td>
            </tr>
        </table>

        <h3>Uploaded File Content</h3>
        <table>
            <?php if ($data["fileContent"]) { ?>
                <tr>
                    <th>Line</th>
                    <th>Content</th>
                </tr>
                <?php foreach ($data["fileContent"] as $lineNumber => $line): ?>
                    <tr>
                        <td><?= $lineNumber + 1 ?></td>
                        <td><?= htmlspecialchars($line) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php } else { ?>
                <tr>
                    <td colspan="2">No file content available.</td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>