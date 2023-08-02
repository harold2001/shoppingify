<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/src/output.css" rel="stylesheet">
    <script src="/public/js/main.js" defer></script>
    <title>Shoppingify</title>
</head>

<body>
    <main class="min-h-screen flex justify-end relative">
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/src/view/components/nav.php" ?>
        <section class="w-[80%] bg-[#fafafe] py-8 flex flex-wrap gap-4">
            <?php foreach ($sorted as $listName => $arrLP) { ?>
                <div class="w-full flex flex-col gap-3 px-3">
                    <h2 class="text-2xl capitalize"><?= $listName ?></h2>
                    <div class="flex flex-wrap w-full justify-center gap-4">
                        <?php
                        foreach ($arrLP as $lp) {
                        ?>
                            <a href="#" class="w-[47%] bg-white p-3 rounded-xl flex justify-center items-center gap-2 shadow-[0_2px_12px_0_rgba(0,0,0,0.05)]">
                                <span><?= $lp["name_product"] ?></span>
                                <img src="/src/assets/img/plus.svg" alt="Plus" class="h-[24px] text-gray-300">
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            <?php
            } ?>
        </section>
        <section class="fixed top-0 h-screen w-[80%] overflow-hidden bg-[#e6d8c8] px-4 pt-6 pb-24 flex flex-col gap-6">

            <div class="bg-[#80485B] rounded-3xl flex w-full justify-center items-center px-4">
                <div class="w-[40%] ">
                    <img src="/src/assets/img/bottle.svg" alt="Bottle" class="relative bottom-5">
                </div>
                <div class="w-[60%] flex flex-col gap-3">
                    <p class="text-white">Didn't find what you need?</p>
                    <div>
                        <button class="bg-white text-black rounded-2xl py-2 px-5">Add item</button>
                    </div>
                </div>
            </div>
            <h2 class="text-3xl font-semibold">Shopping list</h2>
            <form action="#" method="post">
                <div class="flex flex-col gap-5">
                    <h4 class="text-[#828282]">Fruits and vegetables</h4>
                    <div class="flex justify-between">
                        <input type="text" readonly name="products[0][product]" value="1" hidden>
                        <label for="#">Acocado</label>
                        <input type="text" readonly name="products[0][pieces]" value="3" class="bg-transparent text-end w-[30%]">
                    </div>

                    <div class="flex justify-between">
                        <label for="#">Pre-cooked corn 450g</label>
                        <input type="text" readonly name="products[1][product]" value="1" hidden>
                        <input type="text" readonly name="products[1][pieces]" value="3">
                    </div>
                </div>
            </form>
            <div class="h-[13%] bg-white absolute bottom-0 left-0 right-0">
                <div>
                    <input type="text" name="listname">
                    <button type="submit">Save</button>
                </div>
            </div>
        </section>
    </main>

</body>

</html>