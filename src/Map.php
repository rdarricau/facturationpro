<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 10:00 AM
 */
class Map
{
    public function __construct()
    {
        self::entities();
        self::queries();
    }

    public function entities()
    {
        require_once "Entity/Account.php";
        require_once "Entity/Asset.php";
        require_once "Entity/Category.php";
        require_once "Entity/CategoryStatus.php";
        require_once "Entity/Civility.php";
        require_once "Entity/Country.php";
        require_once "Entity/Currency.php";
        require_once "Entity/Customer.php";
        require_once "Entity/Firm.php";
        require_once "Entity/Followup.php";
        require_once "Entity/FollowupStatus.php";
        require_once "Entity/Invoice.php";
        require_once "Entity/Item.php";
        require_once "Entity/Language.php";
        require_once "Entity/Nature.php";
        require_once "Entity/Order.php";
        require_once "Entity/PayBefore.php";
        require_once "Entity/PaymentMode.php";
        require_once "Entity/Product.php";
        require_once "Entity/Purchase.php";
        require_once "Entity/Quote.php";
        require_once "Entity/QuoteStatus.php";
        require_once "Entity/Supplier.php";
        require_once "Entity/VatExemptionReason.php";
    }

    public function queries()
    {
        require_once "Query/Account.php";
        require_once "Query/Assets.php";
        require_once "Query/Categories.php";
        require_once "Query/Customers.php";
        require_once "Query/Followups.php";
        require_once "Query/Invoices.php";
        require_once "Query/Orders.php";
        require_once "Query/Products.php";
        require_once "Query/Purchases.php";
        require_once "Query/Quotes.php";
        require_once "Query/Suppliers.php";
    }
}