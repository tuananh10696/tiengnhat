<?php
$GLOBALS['question_id'] = (isset($GLOBALS['question_id']) && $GLOBALS['question_id'] != 0) ? $GLOBALS['question_id'] : 0;
$id_qs = $GLOBALS['question_id'];
$GLOBALS['mondai_id'] = (isset($GLOBALS['mondai_id'])) ? ($GLOBALS['mondai_id'] + 1) : 1;
?>


<div id="mondai<?= $GLOBALS['mondai_id'] ?>">


    <div class="card-body">
        <audio controls class="w-100">
            <source src="<?= $attributes['cyokai_mp3']['url'] ?>" type="audio/mpeg" />
        </audio>
    </div>

    <?php if (trim($attributes['big_title']) != '')  echo '<div class="mg-top-40 h5-size">' . $attributes['big_title'] . '</div>';
    foreach ($attributes['jlpt_qs'] as $qa) : $id_qs++; ?>
        <div class="jlpt-qs">
            <div class="h5 question-title"><?= $id_qs . '. ' . $qa['qs_title'] ?></div>
            <div class="radio-parent-div ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-1 <?= (isset($qa['one_line']) && $qa['one_line'] != true) ? 'one-line' : '' ?>">
                <?php for ($i = 1; $i <= 4; $i++) {
                    if ($qa['answer_' . $i] != '') {
                        echo '<label class="options lb-text">' . $qa['answer_' . $i] . '
                        <input type="radio" name="answer_' . $id_qs . '" value="' . $i . '">
                        <span class="checkmark"></span>
                    </label>';
                    }
                } ?>
            </div>
            <div class="answer-and-note">
                <input class="display-none true_answer" name="true_answer_<?= $id_qs ?>" value="<?= $qa['true_answer'] ?>"></input>
                <?php if (isset($qa['Explain']) && $qa['Explain'] != '') echo '
            <button type="button" class="btn btn-link explain btn-sm" data-bs-toggle="collapse" data-bs-target="#true_answer_' . $id_qs . '" aria-expanded="false" aria-controls="true_answer_' . $id_qs . '">Giải thích</button>
            <div class="collapse" id="true_answer_' . $id_qs . '">
            <div class="card card-body">' . $qa['Explain'] . '</div></div>'; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>