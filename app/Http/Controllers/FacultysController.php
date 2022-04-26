<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefacultysRequest;
use App\Http\Requests\UpdatefacultysRequest;
use App\Repositories\facultysRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class facultysController extends AppBaseController
{
    /** @var  facultysRepository */
    private $facultysRepository;

    public function __construct(facultysRepository $facultysRepo)
    {
        $this->facultysRepository = $facultysRepo;
    }

    /**
     * Display a listing of the facultys.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $facultys = $this->facultysRepository->all();

        return view('facultys.index')
            ->with('facultys', $facultys);
    }

    /**
     * Show the form for creating a new facultys.
     *
     * @return Response
     */
    public function create()
    {
        return view('facultys.create');
    }

    /**
     * Store a newly created facultys in storage.
     *
     * @param CreatefacultysRequest $request
     *
     * @return Response
     */
    public function store(CreatefacultysRequest $request)
    {
        $input = $request->all();

        $facultys = $this->facultysRepository->create($input);

        Flash::success('Facultys saved successfully.');

        return redirect(route('facultys.index'));
    }

    /**
     * Display the specified facultys.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $facultys = $this->facultysRepository->find($id);

        if (empty($facultys)) {
            Flash::error('Facultys not found');

            return redirect(route('facultys.index'));
        }

        return view('facultys.show')->with('facultys', $facultys);
    }

    /**
     * Show the form for editing the specified facultys.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facultys = $this->facultysRepository->find($id);

        if (empty($facultys)) {
            Flash::error('Facultys not found');

            return redirect(route('facultys.index'));
        }

        return view('facultys.edit')->with('facultys', $facultys);
    }

    /**
     * Update the specified facultys in storage.
     *
     * @param int $id
     * @param UpdatefacultysRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefacultysRequest $request)
    {
        $facultys = $this->facultysRepository->find($id);

        if (empty($facultys)) {
            Flash::error('Facultys not found');

            return redirect(route('facultys.index'));
        }

        $facultys = $this->facultysRepository->update($request->all(), $id);

        Flash::success('Facultys updated successfully.');

        return redirect(route('facultys.index'));
    }

    /**
     * Remove the specified facultys from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facultys = $this->facultysRepository->find($id);

        if (empty($facultys)) {
            Flash::error('Facultys not found');

            return redirect(route('facultys.index'));
        }

        $this->facultysRepository->delete($id);

        Flash::success('Facultys deleted successfully.');

        return redirect(route('facultys.index'));
    }
}
