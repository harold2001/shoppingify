<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/src/output.css" rel="stylesheet">
    <title>Shoppingify</title>
</head>

<body>
    <main class="min-h-screen flex">
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/src/view/components/nav.php" ?>
        <section class="w-[80%] bg-[#fafafe] py-8 flex flex-wrap gap-4">
            <?php foreach ($sorted as $listName => $arrLP) { ?>
                <div class="w-full flex flex-col">
                    <h2 class="text-2xl"><?= $listName ?></h2>
                    <div class="flex flex-wrap w-full justify-center gap-4">
                        <?php
                        foreach ($arrLP as $lp) {
                        ?>
                            <a href="#" class="block w-[45%] bg-blue-400 p-3">
                                <?= $lp["name_product"] ?>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            <?php
            } ?>

        </section>


    </main>

</body>

</html>