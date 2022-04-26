<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createclass_schedullingsRequest;
use App\Http\Requests\Updateclass_schedullingsRequest;
use App\Repositories\class_schedullingsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class class_schedullingsController extends AppBaseController
{
    /** @var  class_schedullingsRepository */
    private $classSchedullingsRepository;

    public function __construct(class_schedullingsRepository $classSchedullingsRepo)
    {
        $this->classSchedullingsRepository = $classSchedullingsRepo;
    }

    /**
     * Display a listing of the class_schedullings.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classSchedullings = $this->classSchedullingsRepository->all();

        return view('class_schedullings.index')
            ->with('classSchedullings', $classSchedullings);
    }

    /**
     * Show the form for creating a new class_schedullings.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_schedullings.create');
    }

    /**
     * Store a newly created class_schedullings in storage.
     *
     * @param Createclass_schedullingsRequest $request
     *
     * @return Response
     */
    public function store(Createclass_schedullingsRequest $request)
    {
        $input = $request->all();

        $classSchedullings = $this->classSchedullingsRepository->create($input);

        Flash::success('Class Schedullings saved successfully.');

        return redirect(route('classSchedullings.index'));
    }

    /**
     * Display the specified class_schedullings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classSchedullings = $this->classSchedullingsRepository->find($id);

        if (empty($classSchedullings)) {
            Flash::error('Class Schedullings not found');

            return redirect(route('classSchedullings.index'));
        }

        return view('class_schedullings.show')->with('classSchedullings', $classSchedullings);
    }

    /**
     * Show the form for editing the specified class_schedullings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classSchedullings = $this->classSchedullingsRepository->find($id);

        if (empty($classSchedullings)) {
            Flash::error('Class Schedullings not found');

            return redirect(route('classSchedullings.index'));
        }

        return view('class_schedullings.edit')->with('classSchedullings', $classSchedullings);
    }

    /**
     * Update the specified class_schedullings in storage.
     *
     * @param int $id
     * @param Updateclass_schedullingsRequest $request
     *
     * @return Response
     */
    public function update($id, Updateclass_schedullingsRequest $request)
    {
        $classSchedullings = $this->classSchedullingsRepository->find($id);

        if (empty($classSchedullings)) {
            Flash::error('Class Schedullings not found');

            return redirect(route('classSchedullings.index'));
        }

        $classSchedullings = $this->classSchedullingsRepository->update($request->all(), $id);

        Flash::success('Class Schedullings updated successfully.');

        return redirect(route('classSchedullings.index'));
    }

    /**
     * Remove the specified class_schedullings from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classSchedullings = $this->classSchedullingsRepository->find($id);

        if (empty($classSchedullings)) {
            Flash::error('Class Schedullings not found');

            return redirect(route('classSchedullings.index'));
        }

        $this->classSchedullingsRepository->delete($id);

        Flash::success('Class Schedullings deleted successfully.');

        return redirect(route('classSchedullings.index'));
    }
}
