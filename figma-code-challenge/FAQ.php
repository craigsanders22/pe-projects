<?php
$faqs = array(
  "How Soon Will My Order Ship?" => "Answer 1",
  "Are There Any Warranty Exclusions?" => "Answer 2",
  "Are There Any Return Exclusions?" => "Answer 3",
  "Will I Be Charged For A Replacement Item?" => "Answer 4",
  "How Can I Track My Orders & Payment?" => "Answer 5",
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
                                  <details>
                                   <summary class="strong-voice">
                                    <span class="question"><?php echo $question; ?></span> 
                                    <span class="dropdown-arrow">▼</span>
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
</section>
