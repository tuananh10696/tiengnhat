<?php if (trim($attributes['big_title']) != '')  echo '<div class="mg-top-40 h5-size">' . $attributes['big_title'] . '</div>'; ?>
<?php
$GLOBALS['question_id'] = (isset($GLOBALS['question_id']) && $GLOBALS['question_id'] != 0) ? $GLOBALS['question_id'] : 0;
foreach ($attributes['jlpt_qs'] as $qa) : $GLOBALS['question_id']++; ?>
    <div class="h5 question-title"><?= $GLOBALS['question_id'] . '. ' . $qa['qs_title'] ?></div>
    <div class="radio-parent-div ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-1 <?= (isset($qa['one_line']) && $qa['one_line'] != true) ? 'one-line' : '' ?>">
        <?php for ($i = 1; $i <= 4; $i++) {
            if ($qa['answer_' . $i] != '') {
                echo '<label class="options lb-text">' . $qa['answer_' . $i] . '
                        <input type="radio" name="answer_' . $GLOBALS['question_id'] . '" value="' . $i . '">
                        <span class="checkmark"></span>
                    </label>';
            }
        }
        ?>
    </div>
    <div class="answer-and-note">
        <input class="display-none true_answer" name="true_answer_<?= $GLOBALS['question_id'] ?>" value="<?= $qa['true_answer'] ?>"></input>
        <?php if (isset($qa['Explain']) && $qa['Explain'] != '') echo '<p class="explain">' . $qa['Explain'] . '</p>' ?>
    </div>
<?php endforeach; ?>