<?php
define('SITE_NAME',    'Torcy Healthcare');
define('SITE_EMAIL',   'Torcyhealthcare@gmail.com');
define('SITE_PHONE',   '+91 836030-0320');
define('SITE_ADDRESS', '127, Vauxhall Drive, Scarborough M1P 1R5, Canada');

function get_products(): array {
    return [
        [
            'id'          => 'best-protein',
            'name'        => 'Best Protein',
            'subtitle'    => 'Protein Powder',
            'tagline'     => 'For Overall Health & Nutrition',
            'flavor'      => 'Chocolate Flavour',
            'net_weight'  => '200g',
            'sugar_free'  => true,
            'badge'       => 'Sugar Free',
            'color'       => '#4A2214',
            'bg'          => '#FDF0EB',
            'image'       => '/assets/images/product-best-protein.png',
            'description' => 'A complete nutritional supplement fortified with DHA, GLA, Biotin, Iron, Calcium, Protein, Vitamins & Minerals. Ideal for pregnant women, lactating mothers, growing children and elderly.',
            'highlights'  => ['DHA, GLA & Biotin Fortified','Rich in Iron & Calcium','Complete Protein Source','Essential Vitamins & Minerals','Sugar Free Formula','100% Dietary Supplement'],
            'composition' => ['Casein Powder'=>'As per formula','Skimmed Milk Powder'=>'As per formula','Dextrose Monohydrate'=>'As per formula','Vitamins, Minerals & Flavour'=>'As per formula'],
            'directions'  => 'Add 2–3 heaped tablespoons in 200ml of lukewarm or cold milk. Add sugar to taste and stir well.',
            'warning'     => 'Consult your doctor if pregnant, lactating or on medication. Not for medicinal use.',
            'storage'     => 'Store in a cool, dry and dark place. Protect from light and moisture. Keep lid tightly closed after use.',
            'shelf_life'  => '18 Months',
        ],
        [
            'id'          => 'vitbest',
            'name'        => 'VitBest',
            'subtitle'    => 'Multivitamin Tablets',
            'tagline'     => 'Superior Antioxidant · Boosts Immunity',
            'flavor'      => null,
            'net_weight'  => '1×15 Tablets',
            'sugar_free'  => false,
            'badge'       => 'Nutraceutical',
            'color'       => '#1B4332',
            'bg'          => '#EBF5F0',
            'image'       => '/assets/images/product-vitbest.png',
            'description' => 'A premium multivitamin and multimineral with Grape Seed Extract. A superior antioxidant complex that boosts immunity, strength and vitality with 22 essential nutrients.',
            'highlights'  => ['Grape Seed Extract 50mg','Vitamin C 80mg','Zinc 17mg','Biotin 30µg','Superior Antioxidant','Boosts Immunity'],
            'composition' => ['Grape Seed Extract'=>'50mg','Vitamin C'=>'80mg','Vitamin B3'=>'18mg','Zinc'=>'17mg','Vitamin E'=>'10mg','Magnesium'=>'3mg','Vitamin B5'=>'3mg','Vitamin B2'=>'2.5mg','Vitamin B6'=>'2.4mg','Vitamin B1'=>'1.8mg','Vitamin A'=>'1000µg','Lycopene'=>'10mg','L-Lysine'=>'100mg','Manganese'=>'250µg','Folic Acid'=>'150µg','Iodine'=>'140µg','Chromium'=>'25µg','Selenium'=>'30µg','Biotin'=>'30µg','Copper'=>'30µg','Vitamin D3'=>'5µg','Vitamin B12'=>'1µg'],
            'directions'  => 'Take one tablet daily with water after a meal, or as directed by your healthcare provider.',
            'warning'     => 'Keep out of reach of children. Do not exceed recommended daily dosage.',
            'storage'     => 'Store in a cool, dry place away from direct sunlight.',
            'shelf_life'  => '24 Months',
        ],
        [
            'id'          => 'calshot-d3',
            'name'        => 'CalShot-D3',
            'subtitle'    => 'Vitamin D3 Nano Shot',
            'tagline'     => 'High-Strength · Bone & Immunity Support',
            'flavor'      => 'Butter Scotch Flavour',
            'net_weight'  => '4×5 ml Bottles',
            'sugar_free'  => false,
            'badge'       => 'High Strength',
            'color'       => '#7A4F1D',
            'bg'          => '#FEF6E4',
            'image'       => '/assets/images/product-calshot-d3.png',
            'description' => 'Cholecalciferol (Vitamin D3) Oral Solution — a nano shot that supports optimal bone mineral density, muscle strength and reduces risk of fractures. Ready to drink.',
            'highlights'  => ['Optimal Bone Mineral Density','Improved Muscle Strength','Reduced Risk of Fractures','Raises serum 25(OH)D levels','Ready-to-drink formula','Butter Scotch Flavour'],
            'composition' => ['Cholecalciferol (Vitamin D3)'=>'High-strength dose per 5ml shot'],
            'directions'  => 'Take one nano shot (5ml) as directed by your physician. No mixing required — ready to drink.',
            'warning'     => 'Do not exceed the recommended daily dosage. Consult your doctor before use.',
            'storage'     => 'Store in a cool, dry place. Close lid tightly after use.',
            'shelf_life'  => '18 Months',
        ],
    ];
}

function get_product_by_id(string $id): ?array {
    foreach (get_products() as $p) {
        if ($p['id'] === $id) return $p;
    }
    return null;
}

function sanitize_input(string $data): string {
    return htmlspecialchars(strip_tags(trim($data)));
}

function current_page(): string { return basename($_SERVER['PHP_SELF']); }
function is_active(string $page): string { return current_page() === $page ? 'active' : ''; }
