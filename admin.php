<?php
session_start();
if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    header('Location: admin_login.php');
    exit;
}
include 'db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Participants</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="flex flex-col min-h-screen bg-gray-50">

    <?php include 'header.php'; ?>

    <main class="flex-grow flex flex-col">

        <section class="py-12 flex-grow">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold">Registered Participants</h2>
                    <form method="post" action="admin_logout.php">
                        <button class="btn-outline" type="button" onclick="window.location='admin_login.php?logout=1'">Logout</button>
                    </form>
                </div>

                <div class="overflow-x-auto bg-white rounded shadow">
                    <table class="min-w-full divide-y">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left">Name</th>
                                <th class="px-4 py-2 text-left">Email</th>
                                <th class="px-4 py-2 text-left">Phone</th>
                                <th class="px-4 py-2 text-left">Organization</th>
                                <th class="px-4 py-2 text-left">Registered At</th>
                                <th class="px-4 py-2 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $res = $conn->query("SELECT * FROM participants ORDER BY created_at DESC");
                            while ($row = $res->fetch_assoc()) {
                                echo '<tr class="border-t">';
                                echo '<td class="px-4 py-2">' . htmlspecialchars($row['name']) . '</td>';
                                echo '<td class="px-4 py-2">' . htmlspecialchars($row['email']) . '</td>';
                                echo '<td class="px-4 py-2">' . htmlspecialchars($row['phone']) . '</td>';
                                echo '<td class="px-4 py-2">' . htmlspecialchars($row['organization']) . '</td>';
                                echo '<td class="px-4 py-2">' . htmlspecialchars($row['created_at']) . '</td>';
                                echo '<td class="px-4 py-2">
                                        <form method="POST" action="delete_participant.php" onsubmit="return confirm(\'Delete this participant?\')">
                                            <input type="hidden" name="id" value="' . intval($row['id']) . '"/>
                                            <button class="text-red-600 hover:underline" type="submit">Delete</button>
                                        </form>
                                      </td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>

</body>

</html>
