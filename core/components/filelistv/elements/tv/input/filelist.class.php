<?php
if(!class_exists('FileListInputRender')) {
    class FileLisTVInputRender extends modTemplateVarInputRender {
        public function getTemplate() {
            return $this->modx->getOption('core_path') . 'components/filelistv/elements/tv/tpl/filelist_in.tpl';
        }
    }
}
return 'FileLisTVInputRender';
