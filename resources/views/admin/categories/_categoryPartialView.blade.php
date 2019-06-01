<div class="model-data">
    <h3>Категория: <strong>{{$genericTypeModel->getName()}}</strong></h3>
    <input type="hidden" id="genericTypeId" value="{{$genericTypeModel->getId()}}">
</div>

<!-- Modal -->
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                Измененение категории: <strong>{{$genericTypeModel->getName()}}</strong>
            </div>
            <form id="editCategoryForm">
                <div class="modal-body">
                    <div class="errors alert alert-danger">
                        <ul></ul>
                    </div>
                    <div class="row form-inline">
                        <input type="hidden" name="id" value="{{$genericTypeModel->getId()}}">
                        <div class="form-group">
                            <label for="name">Название</label>
                            <input type="text" name="name" class="form-control"
                                   value="{{$genericTypeModel->getName()}}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-modal--success" id="saveEdit">Сохранить</button>
                    <button type="reset" id="cancelEdit" class="btn-modal--danger" data-dismiss="modal">Отмена</button>
                </div>
            </form>
        </div>
    </div>
</div>


