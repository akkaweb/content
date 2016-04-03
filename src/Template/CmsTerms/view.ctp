<div class="panel panel-default">
    <div class="panel-heading">
        <span class="pull-right">
            <small><?= __('Actions:'); ?></small>
            <a class="btn btn-xs" href="<?= $this->Url->build(['controller' => 'cmsTerms', 'action' => 'index']) ?>"><i class="fa fa-list"></i> <?= __('List') ?></a>
        </span>
        <h3 class="panel-title"><i class="fa fa-search-plus"></i> <?= __('Cms Term'); ?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6 columns strings">
                <label class="subheader"><?= __('Cms Site') ?></label>
                <p><?= $cmsTerm->has('cms_site') ? $this->Html->link($cmsTerm->cms_site->name, ['controller' => 'CmsSites', 'action' => 'view', $cmsTerm->cms_site->id]) : '' ?></p>
                <label class="subheader"><?= __('Name') ?></label>
                <p><?= h($cmsTerm->name) ?></p>
                <hr/>
                <label class="subheader"><?= __('Title') ?></label>
                <p><?= h($cmsTerm->title) ?></p>
                <hr/>
            </div>
            <div class="col-md-2 columns numbers end">
                <label class="subheader"><?= __('Id') ?></label>
                <p><?= $this->Number->format($cmsTerm->id) ?></p>
                <hr/>
            </div>
        </div>
    </div>
</div>