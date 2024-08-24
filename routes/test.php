<?php
$apiUrl = 'https://accept.paymob.com/v1/intention/';
$apiToken = 'egy_sk_test_3ddd47fe300b424c80d95e459e5e8180368d9d69f07ee66f1640d6e78bdac5bc';
$publicKey = 'egy_pk_test_M6WGfkxJ6tFdC2Vi1dKHYD5GlaFnc2ZK';

$amount = 10000;
$currency = 'EGP';
$paymentMethods = [4624195];
$items = [
    ['name' => 'Cat', 'amount' => $amount, 'description' => 'A lovely pet cat', 'quantity' => 1],
];

$error = $response = $paymentLink = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $billingData = [
        'apartment' => $_POST['apartment'] ?? '',
        'first_name' => $_POST['first_name'] ?? '',
        'last_name' => $_POST['last_name'] ?? '',
        'street' => $_POST['street'] ?? '',
        'building' => $_POST['building'] ?? '',
        'phone_number' => $_POST['phone_number'] ?? '',
        'country' => $_POST['country'] ?? '',
        'email' => $_POST['email'] ?? '',
        'floor' => $_POST['floor'] ?? '',
        'state' => $_POST['state'] ?? '',
    ];

    $customerData = [
        'first_name' => $_POST['first_name'] ?? '',
        'last_name' => $_POST['last_name'] ?? '',
        'email' => $_POST['email'] ?? '',
        'extras' => ['re' => '22'],
    ];

    $data = [
        'amount' => $amount,
        'currency' => $currency,
        'payment_methods' => $paymentMethods,
        'items' => $items,
        'billing_data' => $billingData,
        'customer' => $customerData,
        'extras' => ['ee' => 22],
    ];

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Token '.$apiToken, 'Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    $response = curl_exec($ch);
    $error = curl_errno($ch) ? curl_error($ch) : null;
    curl_close($ch);

    $decodedResponse = json_decode($response, true);
    $clientSecret = $decodedResponse['client_secret'] ?? null;
    $paymentLink = $clientSecret ? "https://accept.paymob.com/unifiedcheckout/?publicKey=$publicKey&clientSecret=$clientSecret" : null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paymob API Response</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .container {
        margin-top: 20px;
    }

    .json-container {
        background: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        padding: 15px;
        overflow-x: auto;
        white-space: pre-wrap;
    }

    .json-key {
        color: #d63384;
    }

    .json-string {
        color: #198754;
    }

    .json-number {
        color: #fd7e14;
    }

    .json-boolean {
        color: #0d6efd;
    }

    .json-null {
        color: #6c757d;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="my-4">Paymob API Response</h1>
        <form method="post">
            <div class="form-group"><label for="first_name">First Name</label><input type="text" class="form-control"
                    id="first_name" name="first_name" required></div>
            <div class="form-group"><label for="last_name">Last Name</label><input type="text" class="form-control"
                    id="last_name" name="last_name" required></div>
            <div class="form-group"><label for="email">Email</label><input type="email" class="form-control" id="email"
                    name="email" required></div>
            <div class="form-group"><label for="phone_number">Phone Number</label><input type="tel" class="form-control"
                    id="phone_number" name="phone_number" required></div>
            <div class="form-group"><label for="street">Street</label><input type="text" class="form-control"
                    id="street" name="street"></div>
            <div class="form-group"><label for="building">Building</label><input type="text" class="form-control"
                    id="building" name="building"></div>
            <div class="form-group"><label for="apartment">Apartment</label><input type="text" class="form-control"
                    id="apartment" name="apartment"></div>
            <div class="form-group"><label for="floor">Floor</label><input type="text" class="form-control" id="floor"
                    name="floor"></div>
            <div class="form-group"><label for="state">State</label><input type="text" class="form-control" id="state"
                    name="state"></div>
            <div class="form-group"><label for="country">Country</label><input type="text" class="form-control"
                    id="country" name="country" value="EGY" required></div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php if ($error) { ?>
        <div class="alert alert-danger mt-3" role="alert"><strong>Error:</strong> <?= htmlspecialchars($error) ?></div>
        <?php } elseif ($response) { ?>
        <div class="alert alert-success mt-3" role="alert">
            <strong>Response:</strong>
            <div id="json-view" class="json-container">
                <?= $decodedResponse ? '<pre id="json-content">'.htmlspecialchars(json_encode($decodedResponse, JSON_PRETTY_PRINT)).'</pre>' : 'No response available' ?>
            </div>
            <?php if ($paymentLink) { ?>
            <div class="mt-3"><strong>Payment Link:</strong> <a href="<?= htmlspecialchars($paymentLink) ?>"
                    target="_blank" class="btn btn-primary">Pay Now</a></div>
            <?php } else { ?>
            <div class="mt-3"><strong>No payment link found.</strong></div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const jsonView = document.getElementById('json-view');
        if (jsonView) {
            const jsonContent = jsonView.textContent;
            jsonView.innerHTML = jsonContent
                .replace(/("(?:\\.|[^"\\])*")/g, '<span class="json-string">$1</span>')
                .replace(/(\b(?:true|false)\b)/g, '<span class="json-boolean">$1</span>')
                .replace(/(\b\d+\b)/g, '<span class="json-number">$1</span>')
                .replace(/(\bnull\b)/g, '<span class="json-null">$1</span>')
                .replace(/("([^"]*)":)/g, '<span class="json-key">$1</span>');
        }
    });
    </script>
</body>

</html>