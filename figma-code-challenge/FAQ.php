<?php
$faqs = array(
  "How Soon Will My Order Ship?" => "Lorem ipsum dolor sit amet consectetur adipisicing, elit.",
  "Are There Any Warranty Exclusions?" => "Lorem ipsum dolor sit amet consectetur adipisicing, elit.",
  "Are There Any Return Exclusions?" => "Lorem ipsum dolor sit amet consectetur adipisicing, elit.",
  "Will I Be Charged For A Replacement Item?" => "Lorem ipsum dolor sit amet consectetur adipisicing, elit.",
  "How Can I Track My Orders & Payment?" => "Lorem ipsum dolor sit amet consectetur adipisicing, elit.",
);
?>

<section class="faq-section">
<inner-column>
    <div class='faq-content'>
        <section class="top-text">
            <h2 class="attention-voice">Frequently Asked Questions</h2>
            <p class="faq-detail calm-voice">
                Lorem ipsum dolor sit amet consectetur adipisicing, elit. Dolor quasi sequi, cum eius laborum. Molestias modi corporis dolores at distinctio.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Dolor quasi sequi, cum eius laborum. Molestias modi corporis dolores at distinctio.
            </p>
        </section>

        <section class="questions">
            <div class="container">
                <ol class="faq-list">
                    <?php 
                    foreach ($faqs as $question => $answer) { 
                        ?>
                        <li>
                            <div class="card-text">
                                <details class="faq-details">
                                    <summary class="faq-summary">
                                        <span class="faq-question"><?php echo $question; ?></span>
                                        <span class="faq-dropdown-arrow">⟫</span>
<span class="faq-dropdown-arrow-down">⌃</span>

                                    </summary>
                                    <div class="faq-answer">
                                        <?php echo $answer; ?>
                                    </div>
                                </details>
                            </div>
                        </li>
                        <?php 
                    }
                    ?>
                </ol>
            </div>
        </section>
    </div>
</inner-column>

<!-- <script>
var detailsElements = document.querySelectorAll('.faq-details');
detailsElements.forEach(function (detailsElement) {
    var arrowElements = {
        default: detailsElement.querySelector('.faq-dropdown-arrow'),
        down: detailsElement.querySelector('.faq-dropdown-arrow-down'),
    };

    detailsElement.addEventListener('toggle', function () {
        if (this.open) {
            arrowElements.default.style.display = 'none';
            arrowElements.down.style.display = '';
        } else {
            arrowElements.default.style.display = '';
            arrowElements.down.style.display = 'none';
        }
    });
});
</script> -->
</section>
