<div class="<?= CouponPopup::$containerClass . ' ' . $coupon['type'] . ' ' . $coupon['theme'] . ' ' . $coupon['expiredClass']; ?>" data-id="<?= $coupon['id'] ?>">
    <?php if ($coupon['code']): ?>
        <h4 class="<?= CouponPopup::$codeClass; ?>"><?= $coupon['code'] ?></h4>
    <?php endif; ?>
    <div class="<?=CouponPopup::$classPrefix;?>col2">
        <button
            type="button"
            class="<?= CouponPopup::$linkClass; ?> btn btn-primary btn-lg btn-block"
            title="<?= $coupon['title']; ?>"
            data-description="<?= $coupon['description']; ?>"
            data-image="<?= $coupon['image']; ?>"
            data-url="<?= $coupon['url']; ?>"
            data-pop="<?= $coupon['pop']; ?>"
            data-code="<?= $coupon['code']; ?>"
            data-type="<?= $coupon['type']; ?>"
            data-popup_theme="<?=$coupon['popup_theme']?>"
            >
            <?= $coupon['title']; ?>
        </button>
    </div>
</div>